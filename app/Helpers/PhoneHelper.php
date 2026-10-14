<?php

namespace App\Helpers;

class PhoneHelper
{
    /**
     * Supported countries for WhatsApp / phone validation.
     */
    public const SUPPORTED_COUNTRIES = [
        'ID' => ['name' => 'Indonesia', 'dial_code' => '62', 'flag' => '🇮🇩', 'min_digits' => 9, 'max_digits' => 13],
        'MY' => ['name' => 'Malaysia', 'dial_code' => '60', 'flag' => '🇲🇾', 'min_digits' => 9, 'max_digits' => 10],
        'SG' => ['name' => 'Singapore', 'dial_code' => '65', 'flag' => '🇸🇬', 'min_digits' => 8, 'max_digits' => 8],
        'TH' => ['name' => 'Thailand', 'dial_code' => '66', 'flag' => '🇹🇭', 'min_digits' => 9, 'max_digits' => 9],
        'PH' => ['name' => 'Philippines', 'dial_code' => '63', 'flag' => '🇵🇭', 'min_digits' => 10, 'max_digits' => 10],
        'IN' => ['name' => 'India', 'dial_code' => '91', 'flag' => '🇮🇳', 'min_digits' => 10, 'max_digits' => 10],
        'JP' => ['name' => 'Japan', 'dial_code' => '81', 'flag' => '🇯🇵', 'min_digits' => 10, 'max_digits' => 11],
        'KR' => ['name' => 'South Korea', 'dial_code' => '82', 'flag' => '🇰🇷', 'min_digits' => 9, 'max_digits' => 11],
        'US' => ['name' => 'USA / Canada', 'dial_code' => '1', 'flag' => '🇺🇸', 'min_digits' => 10, 'max_digits' => 10],
        'GB' => ['name' => 'United Kingdom', 'dial_code' => '44', 'flag' => '🇬🇧', 'min_digits' => 10, 'max_digits' => 11],
        'AU' => ['name' => 'Australia', 'dial_code' => '61', 'flag' => '🇦🇺', 'min_digits' => 9, 'max_digits' => 9],
        'AE' => ['name' => 'UAE', 'dial_code' => '971', 'flag' => '🇦🇪', 'min_digits' => 9, 'max_digits' => 9],
        'SA' => ['name' => 'Saudi Arabia', 'dial_code' => '966', 'flag' => '🇸🇦', 'min_digits' => 9, 'max_digits' => 9],
    ];

    /**
     * Normalize a phone number to pure digits E.164 without '+'.
     * Example outputs:
     * - "081212787989" -> "6281212787989"
     * - "+62 812-1278-7989" -> "6281212787989"
     * - "+60 12-345 6789" -> "60123456789"
     * - "6281212787989" -> "6281212787989"
     *
     * @param string|null $raw
     * @return string|false Normalized digits or false if invalid/empty
     */
    public static function normalize(?string $raw): string|false
    {
        if ($raw === null) {
            return false;
        }

        $trimmed = trim($raw);
        if ($trimmed === '') {
            return false;
        }

        $hasPlus = str_starts_with($trimmed, '+');
        $digits = preg_replace('/[^0-9]/', '', $trimmed);

        if (empty($digits)) {
            return false;
        }

        // If explicitly started with '+'
        if ($hasPlus) {
            // Check known dial codes
            foreach (self::SUPPORTED_COUNTRIES as $country) {
                $dial = $country['dial_code'];
                if (str_starts_with($digits, $dial)) {
                    $national = substr($digits, strlen($dial));
                    // Strip optional leading zero in national part (e.g. +62 0812...)
                    if (str_starts_with($national, '0')) {
                        $national = ltrim($national, '0');
                    }
                    return $dial . $national;
                }
            }
            // If other country with +, keep as digits
            return $digits;
        }

        // Indonesian local format starting with 08 or 0
        if (str_starts_with($digits, '0')) {
            return '62' . substr($digits, 1);
        }

        // Already starting with 62
        if (str_starts_with($digits, '62')) {
            return $digits;
        }

        // Check if starts with any supported country dial code
        foreach (self::SUPPORTED_COUNTRIES as $country) {
            $dial = $country['dial_code'];
            if ($dial !== '62' && str_starts_with($digits, $dial)) {
                return $digits;
            }
        }

        // If 8-13 digits without leading 0 (e.g. user typed 81212787989 directly), default to Indonesia +62
        if (str_starts_with($digits, '8') && strlen($digits) >= 8 && strlen($digits) <= 13) {
            return '62' . $digits;
        }

        // Fallback: if length is between 9 and 15 digits, return digits
        if (strlen($digits) >= 8 && strlen($digits) <= 15) {
            return $digits;
        }

        return false;
    }

    /**
     * Validate normalized phone number.
     * Checks length, known country, and anti-spam patterns.
     *
     * @param string $normalized E.164 digits without '+'
     * @return array ['valid' => bool, 'message' => string]
     */
    public static function validate(string $normalized): array
    {
        $len = strlen($normalized);
        if ($len < 8 || $len > 15) {
            return [
                'valid'   => false,
                'message' => 'Panjang nomor telepon harus antara 8 hingga 15 digit.'
            ];
        }

        // Anti-spam: 7 or more identical digits in a row (e.g. 0000000, 1111111)
        if (preg_match('/(\d)\1{6,}/', $normalized)) {
            return [
                'valid'   => false,
                'message' => 'Nomor telepon tidak valid (terdeteksi digit berulang).'
            ];
        }

        // Anti-spam: obvious sequential ascending or descending digits
        $consecutiveSeqs = [
            '12345678', '23456789', '34567890',
            '87654321', '98765432', '09876543'
        ];
        foreach ($consecutiveSeqs as $seq) {
            if (str_contains($normalized, $seq)) {
                return [
                    'valid'   => false,
                    'message' => 'Nomor telepon tidak valid (pola nomor sekuensial).'
                ];
            }
        }

        // Match supported country and check digit constraints
        $matched = null;
        foreach (self::SUPPORTED_COUNTRIES as $code => $country) {
            if (str_starts_with($normalized, $country['dial_code'])) {
                // If multiple match (like dial 1 vs 12), pick the longest dial code match
                if ($matched === null || strlen($country['dial_code']) > strlen($matched['dial_code'])) {
                    $matched = $country;
                }
            }
        }

        if ($matched !== null) {
            $national = substr($normalized, strlen($matched['dial_code']));
            $nationalLen = strlen($national);

            if ($nationalLen < $matched['min_digits']) {
                return [
                    'valid'   => false,
                    'message' => "Nomor telepon {$matched['name']} terlalu pendek (minimal {$matched['min_digits']} digit setelah kode negara)."
                ];
            }
            if ($nationalLen > $matched['max_digits']) {
                return [
                    'valid'   => false,
                    'message' => "Nomor telepon {$matched['name']} terlalu panjang (maksimal {$matched['max_digits']} digit setelah kode negara)."
                ];
            }
        }

        return ['valid' => true, 'message' => 'Nomor telepon valid.'];
    }

    /**
     * Generate wa.me link from any phone format (auto-normalizes).
     *
     * @param string|null $phone
     * @return string wa.me URL, or empty string if invalid
     */
    public static function waUrl(?string $phone): string
    {
        if (empty($phone)) {
            return '';
        }

        $norm = self::normalize($phone);
        if (!$norm) {
            $digits = preg_replace('/[^0-9]/', '', $phone);
            return $digits ? "https://wa.me/{$digits}" : '';
        }

        return "https://wa.me/{$norm}";
    }

    /**
     * Standardize and format phone number for human display (e.g. "+62 812-1267-8789").
     *
     * @param string|null $phone
     * @return string Formatted phone string or raw fallback
     */
    public static function formatDisplay(?string $phone): string
    {
        if (empty($phone)) {
            return '-';
        }

        $normalized = self::normalize($phone);
        if (!$normalized) {
            return $phone;
        }

        // Match country code
        $matched = null;
        foreach (self::SUPPORTED_COUNTRIES as $country) {
            if (str_starts_with($normalized, $country['dial_code'])) {
                if ($matched === null || strlen($country['dial_code']) > strlen($matched['dial_code'])) {
                    $matched = $country;
                }
            }
        }

        if ($matched !== null) {
            $dial = $matched['dial_code'];
            $national = substr($normalized, strlen($dial));

            // Chunk national digits according to pattern
            // Default pattern: [3, 4, 4] for Indonesia, etc.
            $pattern = ($dial === '62') ? [3, 4, 4] : [3, 3, 4];
            $chunks = [];
            $cursor = 0;
            foreach ($pattern as $len) {
                if ($cursor >= strlen($national)) break;
                $chunks[] = substr($national, $cursor, $len);
                $cursor += $len;
            }
            if ($cursor < strlen($national)) {
                $chunks[] = substr($national, $cursor);
            }

            return "+{$dial} " . implode('-', $chunks);
        }

        return "+{$normalized}";
    }
}

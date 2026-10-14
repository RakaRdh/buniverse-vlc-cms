<?php

namespace App\Services;

use Config\Services;

class EmailService
{
    protected string $frontendBaseUrl;

    public function __construct()
    {
        $this->frontendBaseUrl = rtrim(env('frontend.baseURL') ?: 'http://localhost:8080', '/') . '/';
    }

    /**
     * Mengirimkan email verifikasi aktivasi akun
     */
    public function sendAccountVerificationEmail(string $toEmail, string $fullName, string $verifyToken): bool
    {
        $verifyUrl = $this->frontendBaseUrl . 'auth/verify?token=' . urlencode($verifyToken) . '&email=' . urlencode($toEmail);

        $subject = 'Verifikasi Akun Anda — Datasatu Vocational Learning Center';

        $body = '
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>' . esc($subject) . '</title>
        </head>
        <body style="margin: 0; padding: 0; background-color: #f8fafc; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; color: #1e293b;">
            <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0" style="background-color: #f8fafc; padding: 30px 15px;">
                <tr>
                    <td align="center">
                        <table role="presentation" width="100%" max-width="560px" cellspacing="0" cellpadding="0" border="0" style="max-width: 560px; background-color: #ffffff; border-radius: 14px; overflow: hidden; border: 1px solid #e2e8f0; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05);">
                            <!-- Header -->
                            <tr>
                                <td style="background-color: #C41E24; padding: 24px 30px; text-align: left;">
                                    <h1 style="color: #ffffff; margin: 0; font-size: 20px; font-weight: 800; letter-spacing: -0.5px;">Datasatu VLC</h1>
                                    <p style="color: rgba(255,255,255,0.85); margin: 4px 0 0 0; font-size: 12px;">Vocational Learning Center</p>
                                </td>
                            </tr>
                            <!-- Content -->
                            <tr>
                                <td style="padding: 32px 30px;">
                                    <h2 style="font-size: 18px; color: #0f172a; margin-top: 0; margin-bottom: 16px; font-weight: 700;">Halo, ' . esc($fullName) . '!</h2>
                                    <p style="font-size: 14px; line-height: 1.6; color: #475569; margin-bottom: 20px;">
                                        Terima kasih telah mendaftar di <strong>Datasatu Vocational Learning Center</strong>. Untuk mengaktifkan akun Anda dan melanjutkan pendaftaran kelas pelatihan vokasi, silakan verifikasi alamat email Anda.
                                    </p>
                                    
                                    <div style="text-align: center; margin: 30px 0;">
                                        <a href="' . esc($verifyUrl) . '" style="display: inline-block; background-color: #C41E24; color: #ffffff; font-size: 14px; font-weight: 700; text-decoration: none; padding: 13px 32px; border-radius: 50px; box-shadow: 0 2px 4px rgba(196,30,36,0.25);">
                                            Verifikasi Akun Saya
                                        </a>
                                    </div>

                                    <p style="font-size: 12px; line-height: 1.5; color: #64748B; margin-bottom: 8px;">
                                        Jika tombol di atas tidak dapat diklik, salin dan tempel tautan berikut pada peramban (browser) Anda:
                                    </p>
                                    <p style="font-size: 11px; color: #C41E24; word-break: break-all; background-color: #f1f5f9; padding: 10px 14px; border-radius: 8px; margin-bottom: 24px;">
                                        <a href="' . esc($verifyUrl) . '" style="color: #C41E24; text-decoration: none;">' . esc($verifyUrl) . '</a>
                                    </p>

                                    <hr style="border: 0; border-top: 1px solid #e2e8f0; margin: 24px 0 20px 0;">
                                    <p style="font-size: 12px; line-height: 1.5; color: #94a3b8; margin: 0;">
                                        Abaikan pesan ini jika Anda tidak merasa melakukan pendaftaran akun di Datasatu VLC.
                                    </p>
                                </td>
                            </tr>
                            <!-- Footer -->
                            <tr>
                                <td style="background-color: #f8fafc; border-top: 1px solid #e2e8f0; padding: 16px 30px; text-align: center;">
                                    <p style="font-size: 11px; color: #94a3b8; margin: 0;">
                                        &copy; ' . date('Y') . ' Datasatu Vocational Learning Center &bull; B-Universe
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </body>
        </html>';

        return $this->sendMail($toEmail, $subject, $body);
    }

    /**
     * Mengirimkan email konfirmasi pendaftaran diterima (Waiting / Antrean Verifikasi)
     */
    public function sendEnrollmentWaitingEmail(string $toEmail, string $fullName, array $program): bool
    {
        $programName = $program['name'] ?? 'Vocational Learning Center';
        $duration = $program['duration'] ?? '3 Hari';
        $schedule = trim($program['schedule_info'] ?? '');
        $startDate = !empty($program['start_date']) && $program['start_date'] !== '0000-00-00' ? $program['start_date'] : null;
        $endDate   = !empty($program['end_date']) && $program['end_date'] !== '0000-00-00' ? $program['end_date'] : null;

        if ($startDate && $endDate) {
            $formattedStart = date('d M Y', strtotime($startDate));
            $formattedEnd   = date('d M Y', strtotime($endDate));
            $dateRange = ($formattedStart === $formattedEnd) ? $formattedStart : ($formattedStart . ' - ' . $formattedEnd);
            $schedule = !empty($schedule) ? $schedule . ' (' . $dateRange . ')' : $dateRange;
        } elseif ($startDate) {
            $dateRange = date('d M Y', strtotime($startDate));
            $schedule = !empty($schedule) ? $schedule . ' (' . $dateRange . ')' : $dateRange;
        } elseif ($endDate) {
            $dateRange = date('d M Y', strtotime($endDate));
            $schedule = !empty($schedule) ? $schedule . ' (s.d. ' . $dateRange . ')' : 's.d. ' . $dateRange;
        }

        if (empty($schedule)) {
            $schedule = 'Akan diinformasikan lebih lanjut oleh tim admin';
        }
        $price = !empty($program['price']) ? 'Rp ' . number_format((float)$program['price'], 0, ',', '.') : 'Gratis';

        $subject = 'Pendaftaran Diterima: Pelatihan ' . $programName . ' — Datasatu VLC';

        $body = '
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>' . esc($subject) . '</title>
        </head>
        <body style="margin: 0; padding: 0; background-color: #f8fafc; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; color: #1e293b;">
            <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0" style="background-color: #f8fafc; padding: 30px 15px;">
                <tr>
                    <td align="center">
                        <table role="presentation" width="100%" max-width="560px" cellspacing="0" cellpadding="0" border="0" style="max-width: 560px; background-color: #ffffff; border-radius: 14px; overflow: hidden; border: 1px solid #e2e8f0; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05);">
                            <!-- Header (Amber/Warm Theme for Waiting) -->
                            <tr>
                                <td style="background-color: #f59e0b; padding: 24px 30px; text-align: left;">
                                    <h1 style="color: #ffffff; margin: 0; font-size: 20px; font-weight: 800; letter-spacing: -0.5px;">Pendaftaran Diterima!</h1>
                                    <p style="color: rgba(255,255,255,0.95); margin: 4px 0 0 0; font-size: 12px;">Menunggu Verifikasi &bull; Datasatu Vocational Learning Center</p>
                                </td>
                            </tr>
                            <!-- Content -->
                            <tr>
                                <td style="padding: 32px 30px;">
                                    <h2 style="font-size: 18px; color: #0f172a; margin-top: 0; margin-bottom: 12px; font-weight: 700;">Halo, ' . esc($fullName) . '!</h2>
                                    <p style="font-size: 14px; line-height: 1.6; color: #475569; margin-bottom: 20px;">
                                        Pendaftaran Anda untuk mengikuti program pelatihan vokasi <strong>' . esc($programName) . '</strong> telah kami terima dan saat ini sedang berada dalam antrean verifikasi oleh tim admin Datasatu VLC.
                                    </p>

                                    <!-- Detail Box -->
                                    <div style="background-color: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 18px 20px; margin-bottom: 24px;">
                                        <table width="100%" cellspacing="0" cellpadding="0" border="0" style="font-size: 13px;">
                                            <tr>
                                                <td style="color: #64748B; padding: 4px 0; width: 120px;">Nama Program</td>
                                                <td style="color: #0f172a; font-weight: 700; padding: 4px 0;">: ' . esc($programName) . '</td>
                                            </tr>
                                            <tr>
                                                <td style="color: #64748B; padding: 4px 0;">Durasi</td>
                                                <td style="color: #0f172a; font-weight: 600; padding: 4px 0;">: ' . esc($duration) . '</td>
                                            </tr>
                                            <tr>
                                                <td style="color: #64748B; padding: 4px 0;">Jadwal / Batch</td>
                                                <td style="color: #0f172a; font-weight: 600; padding: 4px 0;">: ' . esc($schedule) . '</td>
                                            </tr>
                                            <tr>
                                                <td style="color: #64748B; padding: 4px 0;">Investasi Biaya</td>
                                                <td style="color: #C41E24; font-weight: 700; padding: 4px 0;">: ' . esc($price) . '</td>
                                            </tr>
                                        </table>
                                    </div>

                                    <!-- Info WhatsApp Pembayaran -->
                                    <div style="background-color: #fffbeb; border: 1px solid #fde68a; border-radius: 10px; padding: 16px 20px; margin-bottom: 24px;">
                                        <h3 style="color: #92400e; font-size: 13px; margin: 0 0 6px 0; font-weight: 700;">Langkah Selanjutnya:</h3>
                                        <p style="color: #b45309; font-size: 12px; line-height: 1.6; margin: 0;">
                                            Tim admin Datasatu VLC akan segera memverifikasi ketersediaan kuota kelas dan menghubungi Anda melalui <strong>WhatsApp</strong> untuk konfirmasi pendaftaran serta petunjuk pembayaran.
                                        </p>
                                    </div>

                                    <div style="text-align: center; margin: 28px 0 10px 0;">
                                        <a href="' . esc($this->frontendBaseUrl) . 'profile" style="display: inline-block; background-color: #C41E24; color: #ffffff; font-size: 13px; font-weight: 700; text-decoration: none; padding: 12px 28px; border-radius: 50px;">
                                            Pantau Status di Profil Saya
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <!-- Footer -->
                            <tr>
                                <td style="background-color: #f8fafc; border-top: 1px solid #e2e8f0; padding: 16px 30px; text-align: center;">
                                    <p style="font-size: 11px; color: #94a3b8; margin: 0;">
                                        &copy; ' . date('Y') . ' Datasatu Vocational Learning Center &bull; B-Universe
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </body>
        </html>';

        return $this->sendMail($toEmail, $subject, $body);
    }

    /**
     * Mengirimkan email konfirmasi enrollment disetujui (Active)
     */
    public function sendEnrollmentApprovedEmail(string $toEmail, string $fullName, array $program): bool
    {
        $programName = $program['name'] ?? 'Pelatihan Vokasi';
        $duration = $program['duration'] ?? '3 Hari';
        $schedule = trim($program['schedule_info'] ?? '');
        $startDate = !empty($program['start_date']) && $program['start_date'] !== '0000-00-00' ? $program['start_date'] : null;
        $endDate   = !empty($program['end_date']) && $program['end_date'] !== '0000-00-00' ? $program['end_date'] : null;

        if ($startDate && $endDate) {
            $formattedStart = date('d M Y', strtotime($startDate));
            $formattedEnd   = date('d M Y', strtotime($endDate));
            $dateRange = ($formattedStart === $formattedEnd) ? $formattedStart : ($formattedStart . ' - ' . $formattedEnd);
            $schedule = !empty($schedule) ? $schedule . ' (' . $dateRange . ')' : $dateRange;
        } elseif ($startDate) {
            $dateRange = date('d M Y', strtotime($startDate));
            $schedule = !empty($schedule) ? $schedule . ' (' . $dateRange . ')' : $dateRange;
        } elseif ($endDate) {
            $dateRange = date('d M Y', strtotime($endDate));
            $schedule = !empty($schedule) ? $schedule . ' (s.d. ' . $dateRange . ')' : 's.d. ' . $dateRange;
        }

        if (empty($schedule)) {
            $schedule = 'Akan diinformasikan lebih lanjut oleh tim admin';
        }
        $price = !empty($program['price']) ? 'Rp ' . number_format((float)$program['price'], 0, ',', '.') : 'Gratis';

        $subject = 'Pendaftaran Disetujui: Pelatihan ' . $programName . ' — Datasatu VLC';

        $body = '
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>' . esc($subject) . '</title>
        </head>
        <body style="margin: 0; padding: 0; background-color: #f8fafc; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; color: #1e293b;">
            <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0" style="background-color: #f8fafc; padding: 30px 15px;">
                <tr>
                    <td align="center">
                        <table role="presentation" width="100%" max-width="560px" cellspacing="0" cellpadding="0" border="0" style="max-width: 560px; background-color: #ffffff; border-radius: 14px; overflow: hidden; border: 1px solid #e2e8f0; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05);">
                            <!-- Header -->
                            <tr>
                                <td style="background-color: #10b981; padding: 24px 30px; text-align: left;">
                                    <h1 style="color: #ffffff; margin: 0; font-size: 20px; font-weight: 800; letter-spacing: -0.5px;">Pendaftaran Disetujui!</h1>
                                    <p style="color: rgba(255,255,255,0.9); margin: 4px 0 0 0; font-size: 12px;">Datasatu Vocational Learning Center</p>
                                </td>
                            </tr>
                            <!-- Content -->
                            <tr>
                                <td style="padding: 32px 30px;">
                                    <h2 style="font-size: 18px; color: #0f172a; margin-top: 0; margin-bottom: 12px; font-weight: 700;">Selamat, ' . esc($fullName) . '!</h2>
                                    <p style="font-size: 14px; line-height: 1.6; color: #475569; margin-bottom: 20px;">
                                        Pendaftaran Anda untuk mengikuti program pelatihan vokasi <strong>' . esc($programName) . '</strong> telah <strong>diverifikasi dan disetujui</strong> oleh tim admin Datasatu VLC.
                                    </p>

                                    <!-- Detail Box -->
                                    <div style="background-color: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 18px 20px; margin-bottom: 24px;">
                                        <table width="100%" cellspacing="0" cellpadding="0" border="0" style="font-size: 13px;">
                                            <tr>
                                                <td style="color: #64748B; padding: 4px 0; width: 120px;">Nama Program</td>
                                                <td style="color: #0f172a; font-weight: 700; padding: 4px 0;">: ' . esc($programName) . '</td>
                                            </tr>
                                            <tr>
                                                <td style="color: #64748B; padding: 4px 0;">Durasi</td>
                                                <td style="color: #0f172a; font-weight: 600; padding: 4px 0;">: ' . esc($duration) . '</td>
                                            </tr>
                                            <tr>
                                                <td style="color: #64748B; padding: 4px 0;">Jadwal / Batch</td>
                                                <td style="color: #0f172a; font-weight: 600; padding: 4px 0;">: ' . esc($schedule) . '</td>
                                            </tr>
                                            <tr>
                                                <td style="color: #64748B; padding: 4px 0;">Harga</td>
                                                <td style="color: #C41E24; font-weight: 700; padding: 4px 0;">: ' . esc($price) . '</td>
                                            </tr>
                                        </table>
                                    </div>

                                    <!-- Info WhatsApp Pembayaran -->
                                    <div style="background-color: #f0fdf4; border: 1px solid #bbf7d0; border-radius: 10px; padding: 16px 20px; margin-bottom: 24px;">
                                        <h3 style="color: #166534; font-size: 13px; margin: 0 0 6px 0; font-weight: 700;">Langkah Selanjutnya & Informasi Pembayaran:</h3>
                                        <p style="color: #15803d; font-size: 12px; line-height: 1.6; margin: 0;">
                                            Rincian tagihan pembayaran, rekening tujuan, dan koordinasi jadwal kelas akan dipandu langsung oleh tim admin Datasatu VLC melalui <strong>WhatsApp ke nomor telepon yang telah Anda daftarkan</strong>. Mohon pastikan nomor WhatsApp Anda aktif.
                                        </p>
                                    </div>

                                    <div style="text-align: center; margin: 28px 0 10px 0;">
                                        <a href="' . esc($this->frontendBaseUrl) . 'profile" style="display: inline-block; background-color: #C41E24; color: #ffffff; font-size: 13px; font-weight: 700; text-decoration: none; padding: 12px 28px; border-radius: 50px;">
                                            Lihat Status di Profil Saya
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <!-- Footer -->
                            <tr>
                                <td style="background-color: #f8fafc; border-top: 1px solid #e2e8f0; padding: 16px 30px; text-align: center;">
                                    <p style="font-size: 11px; color: #94a3b8; margin: 0;">
                                        &copy; ' . date('Y') . ' Datasatu Vocational Learning Center &bull; B-Universe
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </body>
        </html>';

        return $this->sendMail($toEmail, $subject, $body);
    }

    /**
     * Mengirimkan email pemberitahuan pendaftaran ditolak (Rejected)
     */
    public function sendEnrollmentRejectedEmail(string $toEmail, string $fullName, array $program): bool
    {
        $programName = $program['name'] ?? 'Pelatihan Vokasi';
        $coursesUrl = $this->frontendBaseUrl . '#courses';

        $subject = 'Status Pendaftaran: Pelatihan ' . $programName . ' — Datasatu VLC';

        $body = '
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>' . esc($subject) . '</title>
        </head>
        <body style="margin: 0; padding: 0; background-color: #f8fafc; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; color: #1e293b;">
            <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0" style="background-color: #f8fafc; padding: 30px 15px;">
                <tr>
                    <td align="center">
                        <table role="presentation" width="100%" max-width="560px" cellspacing="0" cellpadding="0" border="0" style="max-width: 560px; background-color: #ffffff; border-radius: 14px; overflow: hidden; border: 1px solid #e2e8f0; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05);">
                            <!-- Header -->
                            <tr>
                                <td style="background-color: #64748b; padding: 24px 30px; text-align: left;">
                                    <h1 style="color: #ffffff; margin: 0; font-size: 20px; font-weight: 800; letter-spacing: -0.5px;">Pemberitahuan Pendaftaran</h1>
                                    <p style="color: rgba(255,255,255,0.9); margin: 4px 0 0 0; font-size: 12px;">Datasatu Vocational Learning Center</p>
                                </td>
                            </tr>
                            <!-- Content -->
                            <tr>
                                <td style="padding: 32px 30px;">
                                    <h2 style="font-size: 18px; color: #0f172a; margin-top: 0; margin-bottom: 12px; font-weight: 700;">Halo, ' . esc($fullName) . '</h2>
                                    <p style="font-size: 14px; line-height: 1.6; color: #475569; margin-bottom: 18px;">
                                        Terima kasih atas ketertarikan Anda untuk mengikuti program pelatihan vokasi <strong>' . esc($programName) . '</strong> di Datasatu VLC.
                                    </p>
                                    <p style="font-size: 14px; line-height: 1.6; color: #475569; margin-bottom: 24px;">
                                        Mohon maaf, saat ini pendaftaran Anda untuk batch kelas tersebut <strong>belum dapat disetujui</strong> (kuota kelas telah terpenuhi atau batas waktu konfirmasi telah berakhir).
                                    </p>

                                    <div style="background-color: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 18px 20px; margin-bottom: 24px;">
                                        <p style="font-size: 13px; line-height: 1.6; color: #334155; margin: 0;">
                                            Anda tetap dapat mendaftar untuk batch periode berikutnya atau memilih program kursus vokasi lainnya yang tersedia di katalog kami.
                                        </p>
                                    </div>

                                    <div style="text-align: center; margin: 26px 0 10px 0;">
                                        <a href="' . esc($coursesUrl) . '" style="display: inline-block; background-color: #C41E24; color: #ffffff; font-size: 13px; font-weight: 700; text-decoration: none; padding: 12px 28px; border-radius: 50px;">
                                            Lihat Pilihan Kelas Lainnya
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <!-- Footer -->
                            <tr>
                                <td style="background-color: #f8fafc; border-top: 1px solid #e2e8f0; padding: 16px 30px; text-align: center;">
                                    <p style="font-size: 11px; color: #94a3b8; margin: 0;">
                                        &copy; ' . date('Y') . ' Datasatu Vocational Learning Center &bull; B-Universe
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </body>
        </html>';

        return $this->sendMail($toEmail, $subject, $body);
    }

    /**
     * Mengirimkan email pemberitahuan akses program diblokir (Banned)
     */
    public function sendEnrollmentBannedEmail(string $toEmail, string $fullName, array $program): bool
    {
        $programName = $program['name'] ?? 'Pelatihan Vokasi';
        $coursesUrl = $this->frontendBaseUrl . '#courses';

        $subject = 'Pemberitahuan Status Program: Pelatihan ' . $programName . ' — Datasatu VLC';

        $body = '
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>' . esc($subject) . '</title>
        </head>
        <body style="margin: 0; padding: 0; background-color: #f8fafc; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; color: #1e293b;">
            <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0" style="background-color: #f8fafc; padding: 30px 15px;">
                <tr>
                    <td align="center">
                        <table role="presentation" width="100%" max-width="560px" cellspacing="0" cellpadding="0" border="0" style="max-width: 560px; background-color: #ffffff; border-radius: 14px; overflow: hidden; border: 1px solid #e2e8f0; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05);">
                            <!-- Header (Dark Red / Banned) -->
                            <tr>
                                <td style="background-color: #b91c1c; padding: 24px 30px; text-align: left;">
                                    <h1 style="color: #ffffff; margin: 0; font-size: 20px; font-weight: 800; letter-spacing: -0.5px;">Pemberitahuan Akses Program</h1>
                                    <p style="color: rgba(255,255,255,0.9); margin: 4px 0 0 0; font-size: 12px;">Datasatu Vocational Learning Center</p>
                                </td>
                            </tr>
                            <!-- Content -->
                            <tr>
                                <td style="padding: 32px 30px;">
                                    <h2 style="font-size: 18px; color: #0f172a; margin-top: 0; margin-bottom: 12px; font-weight: 700;">Halo, ' . esc($fullName) . '</h2>
                                    <p style="font-size: 14px; line-height: 1.6; color: #475569; margin-bottom: 18px;">
                                        Kami menginformasikan bahwa pendaftaran Anda untuk program pelatihan vokasi <strong>' . esc($programName) . '</strong> telah <strong>dinonaktifkan / diblokir</strong> oleh tim administrator.
                                    </p>

                                    <div style="background-color: #fef2f2; border: 1px solid #fecaca; border-radius: 10px; padding: 16px 20px; margin-bottom: 24px;">
                                        <p style="font-size: 13px; line-height: 1.6; color: #991b1b; margin: 0;">
                                            Pemblokiran ini hanya berlaku khusus untuk program <strong>' . esc($programName) . '</strong>. Akun member Datasatu Anda tetap aktif dan Anda tetap dapat melihat serta mendaftar ke pilihan program pelatihan lainnya.
                                        </p>
                                    </div>

                                    <div style="text-align: center; margin: 26px 0 10px 0;">
                                        <a href="' . esc($coursesUrl) . '" style="display: inline-block; background-color: #C41E24; color: #ffffff; font-size: 13px; font-weight: 700; text-decoration: none; padding: 12px 28px; border-radius: 50px;">
                                            Lihat Program Lainnya
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <!-- Footer -->
                            <tr>
                                <td style="background-color: #f8fafc; border-top: 1px solid #e2e8f0; padding: 16px 30px; text-align: center;">
                                    <p style="font-size: 11px; color: #94a3b8; margin: 0;">
                                        &copy; ' . date('Y') . ' Datasatu Vocational Learning Center &bull; B-Universe
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </body>
        </html>';

        return $this->sendMail($toEmail, $subject, $body);
    }

    /**
     * Internal email sender via CodeIgniter 4 Email Service
     */
    protected function sendMail(string $toEmail, string $subject, string $htmlBody): bool
    {
        try {
            $email = Services::email();
            $email->setTo($toEmail);
            $email->setSubject($subject);
            $email->setMessage($htmlBody);

            $sent = $email->send();
            if (!$sent) {
                log_message('error', 'Gagal kirim email ke ' . $toEmail . ': ' . $email->printDebugger(['headers', 'subject']));
            }
            return $sent;
        } catch (\Throwable $e) {
            log_message('error', 'Exception pengiriman email ke ' . $toEmail . ': ' . $e->getMessage());
            return false;
        }
    }
}

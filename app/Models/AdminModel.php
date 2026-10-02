<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'tbluseradministrator';
    protected $primaryKey = 'userID';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $allowedFields = [
        'userName',
        'name',
        'slug',
        'email',
        'password',
        'salt',
        'active',
        'roleName',
        'lastLogin',
        'sessionKey',
        'editorCode'
    ];

    const PEPPER = 'B3!21t454t03';

    public static function generateHash(string $password, string $identifier): array
    {
        $cleanId = strtolower(trim($identifier));
        $salt = hash('sha512', '[' . $cleanId . '>|<' . $password . ']');
        $hash = hash('sha512', $salt . self::PEPPER . $password . $salt);
        return ['salt' => $salt, 'hash' => $hash];
    }

    public static function verifyPassword(string $password, string $storedHash, string $salt): bool
    {
        $calculatedHash = hash('sha512', $salt . self::PEPPER . $password . $salt);
        return hash_equals($storedHash, $calculatedHash);
    }

    public function ensureDefaultAdmin(): void
    {
        if ($this->countAllResults() === 0) {
            $cred = self::generateHash('admin123', 'admin@datasatu.com');
            $this->insert([
                'userName' => 'admin',
                'name' => 'Administrator VLC',
                'slug' => 'admin-vlc',
                'email' => 'admin@datasatu.com',
                'password' => $cred['hash'],
                'salt' => $cred['salt'],
                'active' => '1',
                'roleName' => 'superadmin'
            ]);
        }
    }
}

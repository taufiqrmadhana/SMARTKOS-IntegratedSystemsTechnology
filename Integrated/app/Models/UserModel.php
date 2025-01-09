<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'penjaga_kos'; // Tabel database untuk pengguna
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'username',
        'password', // Password akan di-hash sebelum disimpan
    ];

    protected $useTimestamps = true; // Aktifkan kolom created_at dan updated_at
}

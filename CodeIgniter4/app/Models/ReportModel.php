<?php

namespace App\Models;

use CodeIgniter\Model;

class ReportModel extends Model
{
    protected $table      = 'reports'; // Nama tabel di database
    protected $primaryKey = 'id'; // Primary key

    protected $useTimestamps = true; // Aktifkan kolom timestamp (created_at, updated_at)
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    protected $allowedFields = [
        'problem_type',
        'description',
        'room_location',
        'photo',
        'status',
    ]; // Kolom yang diizinkan untuk diisi
}

<?php

namespace App\Models;

use CodeIgniter\Model;

class PeminjamanModel extends Model
{
    protected $table = 'peminjaman';
    protected $primaryKey = 'id_peminjaman';

    protected $allowedFields = [
        'id_buku',
        'nama',
        'tanggal_pinjam',
        'tanggal_kembali',
        'status'
    ];
}
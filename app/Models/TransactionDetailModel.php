<?php

namespace App\Models;

use CodeIgniter\Model;

class TransactionDetailModel extends Model
{
    protected $table = 'transaction_detail'; // ✅ sesuai nama tabel
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'transaction_id',     // kolom relasi ke transaction
        'product_id',
        'jumlah',
        'diskon',
        'subtotal_harga',
        'created_at',
        'updated_at'
    ];

    protected $useTimestamps = false;
}

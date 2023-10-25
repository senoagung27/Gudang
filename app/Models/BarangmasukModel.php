<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangmasukModel extends Model
{
    use HasFactory;
    protected $table = "barangmasuk_models";
    protected $primaryKey = 'bm_id';
    protected $fillable = [
        'bm_kode',
        'barang_kode',
        'customer_id',
        'bm_tanggal',
        'bm_jumlah',
    ]; 
}

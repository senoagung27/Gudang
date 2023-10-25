<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangkeluarModel extends Model
{
    use HasFactory;
    protected $table = "barangkeluar_models";
    protected $primaryKey = 'bk_id';
    protected $guarded = ['*'];
    // protected $fillable = [
    //     'bk_kode',
    //     'barang_kode',
    //     'bk_tanggal',
    //     'bk_tujuan',
    //     'bk_jumlah',
    // ]; 
}

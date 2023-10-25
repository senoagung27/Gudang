<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisBarangModel extends Model
{
    use HasFactory;
    protected $table = "jenis_barang_models";
    protected $primaryKey = 'jenisbarang_id';
    protected $fillable = [
        'jenisbarang_nama',
        'jenisbarang_slug',
        'jenisbarang_ket'
    ]; 
}

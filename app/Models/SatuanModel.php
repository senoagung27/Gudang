<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SatuanModel extends Model
{
    use HasFactory;
    protected $table = "satuan_models";
    protected $primaryKey = 'satuan_id';
    protected $fillable = [
        'satuan_nama',
        'satuan_slug',
        'satuan_keterangan'
    ]; 
}

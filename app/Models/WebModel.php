<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebModel extends Model
{
    use HasFactory;
    protected $table = "web_models";
    protected $primaryKey = 'web_id';
    protected $fillable = [
        'web_nama',
        'web_logo',
        'web_deskripsi'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerModel extends Model
{
    use HasFactory;
    protected $table = "customer_models";
    protected $primaryKey = 'customer_id';
    protected $fillable = [
        'customer_nama',
        'customer_slug',
        'customer_alamat',
        'customer_notelp',
    ]; 
}

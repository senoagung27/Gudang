<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AksesModel extends Model
{
    use HasFactory;
    protected $table = "akses_models";
    protected $primaryKey = 'akses_id';
    protected $fillable = [
        'menu_id',
        'submenu_id',
        'othermenu_id',
        'role_id',
        'akses_type'
    ]; 
}

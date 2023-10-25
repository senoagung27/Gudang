<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubmenuModel extends Model
{
    use HasFactory;
    protected $table = "submenu_models";
    protected $primaryKey = 'submenu_id';
    protected $fillable = [
        'menu_id',
        'submenu_judul',
        'submenu_slug',
        'submenu_redirect',
        'submenu_sort'
    ]; 
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppreanceModel extends Model
{
    use HasFactory;
    protected $table = "appreance_models";
    protected $primaryKey = 'appreance_id';
    protected $fillable = [
        'user_id',
        'appreance_layout',
        'appreance_theme',
        'appreance_menu',
        'appreance_header',
        'appreance_sidestyle'
    ]; 
}

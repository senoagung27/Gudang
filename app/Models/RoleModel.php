<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoleModel extends Model
{
    use HasFactory;
    protected $table = "role_models";
    protected $primaryKey = 'role_id';
    protected $fillable = [
        'role_title',
        'role_slug',
        'role_desc'
    ]; 
}

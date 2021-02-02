<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Masterusers extends Model
{
    use HasFactory;
    protected $table = 'master_users';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'status',
        'position',
    ];
}

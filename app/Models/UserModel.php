<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;
    protected $table = 'tbl_user';
    protected $fillable = [
        'first_name',
        'last_name',
        'date',
        'email',
        'number',
        'password',
    ];
}

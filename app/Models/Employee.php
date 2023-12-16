<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;


    protected $fillable = [
        'unique_key',
        'soft_delete',
        'name',
        'phonenumber',
        'alter_phonenumber',
        'email_id',
        'address',
        'role',
        'password'
    ];
}

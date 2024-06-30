<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User_Profile extends Authenticatable
{
    use HasFactory;
    protected $table  = 'user_profile';
    protected $fillable = [
        'student_number',
        'last_name',
        'first_name',
        'middle_name',
        'birth_date',
        'address',
        'contact_number',
        'email',
        'password',
        'photo'
    ];
}

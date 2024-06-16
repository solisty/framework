<?php

namespace App\Models;

use Solisty\Database\Model;

class User extends Model
{
    protected static string $table = "users";
    
    protected array $assignables = [
        'id',
        'email',
        'password'
    ];
}

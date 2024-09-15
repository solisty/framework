<?php

namespace App\Models;

use Solisty\Database\ColumnTypes\Integer;
use Solisty\Database\ColumnTypes\ShortString;
use Solisty\Database\Model;

class User extends Model
{
    protected Integer $id;
    protected ShortString $email;
    protected ShortString $password;


    // TODO: should add setup method to define the columns
    public function __construct()
    {
        // define the columns types
        $this->id = new Integer(autoIncrement: true);   
        $this->email = new ShortString();
        $this->password = new ShortString();

        // define any relationship
        // $this->hasMany('posts', Post::class);
        // $this->belongsTo('profile', Profile::class);
        // etc...

        // morph relationships should use the php polymorphism feature
    }

    public function __get($name)
    {
        return $this->$name;
    }
}

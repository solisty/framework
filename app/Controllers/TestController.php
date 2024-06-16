<?php

namespace App\Controllers;

use App\Models\User;
use Solisty\Http\Request;

class TestController
{
    public function test(Request $request)
    {
        // $user = User::insert([
        //     'email' => 'test@test.com',
        //     // 'name' => 'test name',
        //     'password' => 'abc'
        // ]);
        
        $message = "ftoooh";
        return view('../views/view.flame.php', [
            'message' => $message,
            'user' => User::find(1)
        ]);
    }

    public function createUser()
    {
        
        return [
            "error" => false
        ];
    }
}

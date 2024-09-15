<?php

namespace App\Controllers;

use Solisty\Http\Request;

class TestController
{
    public function test(Request $request)
    {
        return view('../views/test.flame.php');
    }

    public function createUser()
    {

        return [
            "error" => false
        ];
    }

    public function createLike()
    {

        return [
            'error' => false
        ];
    }
}

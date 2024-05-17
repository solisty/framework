<?php

namespace App\Controllers;

use Solisty\Http\Request;

class TestController
{
    public function test(Request $request)
    {
        $message = "ftoooh";

        view('../views/view.flame.php', compact('message'));
    }
}

<?php

use App\Controllers\TestController;
use Solisty\Routing\Router;

Router::get('/yes', [TestController::class, 'test'])->name('yes');
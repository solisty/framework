<?php

use App\Controllers\TestController;
use Solisty\Routing\Router;

Router::get('/', [TestController::class, 'test'])->name('home');
Router::get('/api/user/create', [TestController::class, 'createUser'])->name('api');
<?php

use App\Controllers\TestController;
use Solisty\Routing\Router;

Router::get('/', [TestController::class, 'test'])->name('dd');
Router::get('/{user}', [TestController::class, 'test'])->name('home')->middleware('auth');
Router::get('/api/user/create', [TestController::class, 'createUser'])->name('api');
Router::get('/api/like/create', [TestController::class, 'createLike'])->name('api');
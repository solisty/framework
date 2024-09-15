<?php

use Solisty\Database\Table;
use Solisty\Database\Operation;

// Operation::run('users', function (Table $table) {
//     $table->integer("id")->autoIncrement()->primaryKey();
//     $table->string('name')->nullable();
//     $table->string('email');
//     $table->string('password');
//     // $table->timestamps(); // not done yet
// });

Operation::run('likes', function (Table $table) {
    $table->integer("id")->autoIncrement()->primaryKey();
    $table->integer('post_id');
    $table->integer('user_id');
    // $table->timestamps(); // not done yet
});
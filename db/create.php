<?php

use Solisty\Database\Table;
use Solisty\Database\Operation;

Operation::run('users', function (Table $table) {
    $table->integer("id")->autoIncrement();
});

Operation::run('posts', function (Table $table) {
    $table->integer("id")->autoIncrement();
});

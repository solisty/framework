<?php

use Solisty\Database\Table;

Table::new('users', [
    'id',
    'name' => "string|required",
    "email" => "string|unique|required",
    'timestamp',
])->op(1);

Table::new('product', [
    'id',
    'name' => "string|required|null:false",
    "description" => "string|unique|null:false",
    'timestamp',
])->op(2);

// if the linked op exists and it was ran successfully
// then we can reverse it programmatically
Table::update('users', [
    'name' => 'text'
])->op(1);
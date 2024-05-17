<?php

require __DIR__ . '/../vendor/autoload.php';

use Solisty\Http\Http;
use Solisty\Main\Application;

$app = Application::create([
    "APP_BASE" => dirname(__DIR__),
], false);

$request = Http::make();

$app->handle($request);

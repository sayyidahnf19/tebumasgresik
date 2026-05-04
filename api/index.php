<?php

// Vercel Serverless Function Entry Point for Laravel
// This file routes all requests to the Laravel application

define('LARAVEL_START', microtime(true));

// Require the Bootstrap file
require __DIR__ . '/../bootstrap/app.php';

// Handle the request through Laravel
$kernel = $app->make(\Illuminate\Contracts\Http\Kernel::class);
$response = $kernel->handle(
    $request = \Illuminate\Http\Request::capture()
);
$response->send();
$kernel->terminate($request, $response);

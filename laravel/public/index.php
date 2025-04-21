<?php

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Maintenance mode ?
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Autoload
require __DIR__.'/../vendor/autoload.php';

// Bootstrapping
$app = require_once __DIR__.'/../bootstrap/app.php';

/** @var Kernel $kernel */
$kernel = $app->make(Kernel::class);

// On capture l’exception pour afficher la trace
try {
    $request  = Request::capture();
    $response = $kernel->handle($request);
} catch (\Throwable $e) {
    echo '<pre>';
    echo "Error: " . $e->getMessage() . "\n";
    echo "File:  " . $e->getFile() . ":" . $e->getLine() . "\n\n";
    echo "Trace:\n" . $e->getTraceAsString();
    exit(1);
}

$response->send();

$kernel->terminate($request, $response);

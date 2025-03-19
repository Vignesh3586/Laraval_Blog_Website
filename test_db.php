<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Application;

require __DIR__.'/vendor/autoload.php';

// Load the Laravel application
$app = require_once __DIR__.'/bootstrap/app.php';

// Bootstrap the application
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

try {
    $pdo = DB::connection()->getPdo();
    echo "Database connection successful: " . $pdo->getAttribute(PDO::ATTR_DRIVER_NAME);
} catch (\Exception $e) {
    die("Could not connect to the database. Error: " . $e->getMessage());
}

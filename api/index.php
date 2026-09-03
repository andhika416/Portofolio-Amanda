<?php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Setup writable storage directory in /tmp for Vercel Serverless
$storagePath = sys_get_temp_dir() . '/storage';
if (DIRECTORY_SEPARATOR === '/') {
    $storagePath = '/tmp/storage';
}

$directories = [
    $storagePath . '/framework/views',
    $storagePath . '/framework/cache/data',
    $storagePath . '/framework/sessions',
    $storagePath . '/logs',
    $storagePath . '/app/public',
];

foreach ($directories as $dir) {
    if (!is_dir($dir)) {
        @mkdir($dir, 0755, true);
    }
}

// In case Vercel project environment variables are missing, ensure essential defaults
if (empty(getenv('APP_KEY')) && empty($_ENV['APP_KEY'])) {
    putenv('APP_KEY=base64:DDuwKXkyoTlGdMRZIF53I7E9Ul+HKD9wJzv84mDZQMU=');
    $_ENV['APP_KEY'] = 'base64:DDuwKXkyoTlGdMRZIF53I7E9Ul+HKD9wJzv84mDZQMU=';
}

putenv("APP_STORAGE={$storagePath}");
$_ENV['APP_STORAGE'] = $storagePath;

putenv("VIEW_COMPILED_PATH={$storagePath}/framework/views");
$_ENV['VIEW_COMPILED_PATH'] = "{$storagePath}/framework/views";

putenv('CACHE_STORE=array');
$_ENV['CACHE_STORE'] = 'array';

putenv('SESSION_DRIVER=cookie');
$_ENV['SESSION_DRIVER'] = 'cookie';

putenv('LOG_CHANNEL=stderr');
$_ENV['LOG_CHANNEL'] = 'stderr';

// Register Composer Autoloader
require __DIR__ . '/../vendor/autoload.php';

// Bootstrap Laravel Application
/** @var \Illuminate\Foundation\Application $app */
$app = require_once __DIR__ . '/../bootstrap/app.php';

// Set storage path
$app->useStoragePath($storagePath);

// Handle the request
$app->handleRequest(Request::capture());

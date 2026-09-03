<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Setup writable storage directory in /tmp for Vercel Serverless
$storagePath = (DIRECTORY_SEPARATOR === '/') ? '/tmp/storage' : (sys_get_temp_dir() . '/storage');

$directories = [
    $storagePath . '/framework/views',
    $storagePath . '/framework/cache/data',
    $storagePath . '/framework/sessions',
    $storagePath . '/logs',
    $storagePath . '/app/public',
    $storagePath . '/bootstrap/cache',
];

foreach ($directories as $dir) {
    if (!is_dir($dir)) {
        @mkdir($dir, 0755, true);
    }
}

// Ensure essential defaults for Serverless runtime
putenv('APP_ENV=production');
$_ENV['APP_ENV'] = 'production';

putenv('APP_DEBUG=true');
$_ENV['APP_DEBUG'] = 'true';

if (empty(getenv('APP_KEY')) && empty($_ENV['APP_KEY'])) {
    putenv('APP_KEY=base64:DDuwKXkyoTlGdMRZIF53I7E9Ul+HKD9wJzv84mDZQMU=');
    $_ENV['APP_KEY'] = 'base64:DDuwKXkyoTlGdMRZIF53I7E9Ul+HKD9wJzv84mDZQMU=';
}

putenv("APP_STORAGE={$storagePath}");
$_ENV['APP_STORAGE'] = $storagePath;

putenv("VIEW_COMPILED_PATH={$storagePath}/framework/views");
$_ENV['VIEW_COMPILED_PATH'] = "{$storagePath}/framework/views";

putenv("APP_CONFIG_CACHE={$storagePath}/bootstrap/cache/config.php");
$_ENV['APP_CONFIG_CACHE'] = "{$storagePath}/bootstrap/cache/config.php";

putenv("APP_EVENTS_CACHE={$storagePath}/bootstrap/cache/events.php");
$_ENV['APP_EVENTS_CACHE'] = "{$storagePath}/bootstrap/cache/events.php";

putenv("APP_PACKAGES_CACHE={$storagePath}/bootstrap/cache/packages.php");
$_ENV['APP_PACKAGES_CACHE'] = "{$storagePath}/bootstrap/cache/packages.php";

putenv("APP_ROUTES_CACHE={$storagePath}/bootstrap/cache/routes.php");
$_ENV['APP_ROUTES_CACHE'] = "{$storagePath}/bootstrap/cache/routes.php";

putenv("APP_SERVICES_CACHE={$storagePath}/bootstrap/cache/services.php");
$_ENV['APP_SERVICES_CACHE'] = "{$storagePath}/bootstrap/cache/services.php";

putenv('CACHE_STORE=array');
$_ENV['CACHE_STORE'] = 'array';

putenv('CACHE_DRIVER=array');
$_ENV['CACHE_DRIVER'] = 'array';

putenv('SESSION_DRIVER=cookie');
$_ENV['SESSION_DRIVER'] = 'cookie';

putenv('LOG_CHANNEL=stderr');
$_ENV['LOG_CHANNEL'] = 'stderr';

putenv('DB_CONNECTION=sqlite');
$_ENV['DB_CONNECTION'] = 'sqlite';

try {
    // Register Composer Autoloader
    require __DIR__ . '/../vendor/autoload.php';

    // Bootstrap Laravel Application
    /** @var \Illuminate\Foundation\Application $app */
    $app = require_once __DIR__ . '/../bootstrap/app.php';

    // Set storage path
    $app->useStoragePath($storagePath);

    // Handle the request
    $app->handleRequest(Request::capture());
} catch (\Throwable $e) {
    http_response_code(500);
    echo "<h1>Application Error on Vercel</h1>";
    echo "<p><strong>Message:</strong> " . htmlspecialchars($e->getMessage()) . "</p>";
    echo "<p><strong>File:</strong> " . htmlspecialchars($e->getFile()) . ":" . $e->getLine() . "</p>";
    echo "<pre style='background:#f4f4f4;padding:15px;border:1px solid #ddd;'>" . htmlspecialchars($e->getTraceAsString()) . "</pre>";
}

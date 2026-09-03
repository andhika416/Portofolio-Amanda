<?php

// Create necessary writable directories in /tmp for Vercel serverless environment
$dirs = [
    '/tmp/views',
    '/tmp/cache',
    '/tmp/sessions',
    '/tmp/logs',
];

foreach ($dirs as $dir) {
    if (!is_dir($dir)) {
        @mkdir($dir, 0755, true);
    }
}

$_ENV['VIEW_COMPILED_PATH'] = '/tmp/views';
putenv('VIEW_COMPILED_PATH=/tmp/views');

require __DIR__ . '/../public/index.php';

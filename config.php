<?php
/**
 * Scotlase Solutions - Configuration
 * Loads from .env if present (e.g. Hostinger), otherwise uses defaults
 */

$envFile = __DIR__ . '/.env';
if (file_exists($envFile)) {
    $lines = file($envFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        $line = trim($line);
        if ($line === '' || strpos($line, '#') === 0) continue;
        if (strpos($line, '=') !== false) {
            list($key, $value) = explode('=', $line, 2);
            $key = trim($key);
            $value = trim($value, " \t\n\r\0\x0B\"'");
            if ($key !== '' && !getenv($key)) {
                putenv("$key=$value");
                $_ENV[$key] = $value;
            }
        }
    }
}

$dbHost = getenv('DB_HOST') ?: '127.0.0.1:8889';
$parts = explode(':', $dbHost, 2);
define('DB_HOST', $parts[0]);
define('DB_PORT', $parts[1] ?? '3306');
define('DB_NAME', getenv('DB_NAME') ?: 'scotlase');
define('DB_USER', getenv('DB_USER') ?: 'root');
define('DB_PASS', getenv('DB_PASS') ?: 'root');

define('SITE_NAME', 'Scotlase Solutions');
define('SITE_URL', '/');

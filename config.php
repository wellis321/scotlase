<?php
/**
 * Scotlase Solutions - Configuration
 * Database credentials from overview.txt
 */

$dbHost = getenv('DB_HOST') ?: '127.0.0.1:8889';
$parts = explode(':', $dbHost, 2);
define('DB_HOST', $parts[0]);
define('DB_PORT', $parts[1] ?? '3306');
define('DB_NAME', getenv('DB_NAME') ?: 'scotlase');
define('DB_USER', getenv('DB_USER') ?: 'root');
define('DB_PASS', getenv('DB_PASS') ?: 'root');

define('SITE_NAME', 'Scotlase Solutions');
define('SITE_URL', '/');

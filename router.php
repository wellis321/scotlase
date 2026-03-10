<?php
/**
 * Router for PHP built-in server when run from project root:
 * php -S localhost:8000 router.php
 * Routes all requests to public/
 */
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$base = __DIR__ . '/public';

// Map / to index.php
if ($uri === '/' || $uri === '') {
    $uri = '/index.php';
}

$path = $base . $uri;

// Serve existing files (PHP, CSS, JS, images)
if (file_exists($path) && is_file($path)) {
    $ext = pathinfo($path, PATHINFO_EXTENSION);
    $mimes = [
        'css' => 'text/css',
        'js' => 'application/javascript',
        'png' => 'image/png',
        'jpg' => 'image/jpeg',
        'jpeg' => 'image/jpeg',
        'gif' => 'image/gif',
        'ico' => 'image/x-icon',
        'svg' => 'image/svg+xml',
        'webp' => 'image/webp',
    ];
    if (isset($mimes[$ext])) {
        header('Content-Type: ' . $mimes[$ext]);
        readfile($path);
        return true;
    }
    if ($ext === 'php') {
        chdir($base);
        require $path;
        return true;
    }
}

// Try adding .php for clean URLs (e.g. /services -> services.php)
$phpPath = $base . $uri . (str_ends_with($uri, '/') ? 'index' : '') . '.php';
if (file_exists($phpPath) && is_file($phpPath)) {
    chdir($base);
    require $phpPath;
    return true;  // Must return true so server uses our output, not index.php
}

// 404 - return true with 404 so server doesn't fall back to index.php
http_response_code(404);
echo '404 Not Found';
return true;

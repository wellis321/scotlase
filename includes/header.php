<?php
if (!defined('SITE_NAME')) {
    require_once __DIR__ . '/../config.php';
}
$currentPage = basename($_SERVER['PHP_SELF'], '.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle ?? SITE_NAME) ?> | <?= htmlspecialchars(SITE_NAME) ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,400;0,9..40,600;1,9..40,400&family=Syne:wght@600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css?v=2">
</head>
<body>
    <header class="site-header">
        <div class="header-inner">
            <a href="index.php" class="logo"><?= htmlspecialchars(SITE_NAME) ?></a>
            <button class="nav-toggle" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <nav class="main-nav">
                <a href="index.php" class="<?= $currentPage === 'index' ? 'active' : '' ?>">Home</a>
                <a href="about.php" class="<?= $currentPage === 'about' ? 'active' : '' ?>">About</a>
                <a href="services.php" class="<?= $currentPage === 'services' ? 'active' : '' ?>">Services</a>
                <a href="contact.php" class="<?= $currentPage === 'contact' ? 'active' : '' ?>">Contact</a>
            </nav>
        </div>
    </header>
    <main>

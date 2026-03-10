<?php
/**
 * Root index - serves public content when document root is project root.
 * With router.php, this is never reached. With Apache + .htaccess, / routes to public/.
 */
chdir(__DIR__ . '/public');
require __DIR__ . '/public/index.php';

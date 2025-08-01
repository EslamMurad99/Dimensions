<?php

// File: server.php

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

if ($uri !== '/' && file_exists(__DIR__.'/public'.$uri)) {
    return false; // Serve static files directly
}

require_once __DIR__.'/public/index.php';
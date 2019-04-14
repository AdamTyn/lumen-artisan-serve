<?php

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylor@laravel.com>
 */

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

// This file allows us to emulate Apache's "mod_rewrite" functionality from the
// built-in PHP web server. This provides a convenient way to test a Laravel
// application without having installed a "real" web server software here.
if ($uri !== '/' && file_exists(__DIR__.$uri)) {
    return false;
}

function public_path()
{
    $divide = DIRECTORY_SEPARATOR;
    $path = __DIR__;
    $temp = explode($divide, $path);
    $return = '';
    $count = count($temp);
    for ($i = 0; $i < $count - 3; ++$i) {
        $return .= ($temp[$i] . $divide);
    }
    return $return.'public';
}

require_once public_path() . 'index.php';

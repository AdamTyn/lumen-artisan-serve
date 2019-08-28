<?php

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

if ($uri !== '/' && file_exists(__DIR__ . $uri)) {
    return false;
}

function public_path()
{
    $divide = DIRECTORY_SEPARATOR;
    $path = __DIR__;
    $temp = explode($divide, $path);
    $return = '';
    $count = count($temp);
    for ($i = 0; $i < $count - 4; ++$i) {
        $return .= ($temp[$i] . $divide);
    }
    return $return . 'public' . DIRECTORY_SEPARATOR;
}

require_once public_path() . 'index.php';

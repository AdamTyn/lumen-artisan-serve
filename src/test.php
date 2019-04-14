<?php

$b='/vendor/adamtyn/lumen-artisan-serve/src';
function public_path()
{
	$a='\root\vendor\lumen-artisan-serve\src';
	$b=DIRECTORY_SEPARATOR;
    $temp = explode($b, $a);
    $return = '';
    $count = count($temp);


    for ($i = 0; $i < $count - 2; ++$i) {
        $return .= ($temp[$i]. $b);
    }
	return $return;
}

echo public_path();

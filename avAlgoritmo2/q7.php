<?php

$a = intval($argv[1]);
$b = intval($argv[2]);
$c = intval($argv[3]);

$m = $a;
if ($m < $b){
    $m = $b;
}
if ($m < $c){
    $m = $c;
}
var_dump($m);
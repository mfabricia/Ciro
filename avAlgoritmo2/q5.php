<?php

$x1 = floatval($argv[1]);
$y1 = floatval($argv[2]);
$x2 = floatval($argv[3]);
$y2 = floatval($argv[4]);

$d = sqrt((($x1-$x2)**2)+(($y1-$y2)**2));

var_dump($d);
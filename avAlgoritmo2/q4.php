<?php
$s = intval($argv[1]); //pega o valor em segundos inteiros

$h = intdiv($s, 3600);//divide por 3600 que da as horas
$s = $h % 3600;//segundos vai atualizar e vai ser o resto da divisão

$m = intdiv($s, 60);// divide por 60 que da os minutos
$s = $s % 60;//segundos vai atualizar e vai ser o resto da divisão


var_dump($h."h".$m."m".$s."s");
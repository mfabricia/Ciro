<?php
$id = intval($argv[1]);

if ($id <= 17){
    var_dump("Menor");
}
if ($id >= 18 && $id < 60){
    var_dump("Adulto");
}
if ($id > 59){
    var_dump("Idoso");
}
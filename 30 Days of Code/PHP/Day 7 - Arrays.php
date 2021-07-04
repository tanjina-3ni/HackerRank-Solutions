<?php



$n = intval(trim(fgets(STDIN)));

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));
$i = count($arr)-1;
while($i>=0){
    echo($arr[$i].' ');
    $i--;
}

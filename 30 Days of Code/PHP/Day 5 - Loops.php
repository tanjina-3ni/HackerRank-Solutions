<?php



$n = intval(trim(fgets(STDIN)));
$i = 1;
while($i<=10) {
    echo("$n x $i = ".($n*$i)."\n");
    $i++;
}

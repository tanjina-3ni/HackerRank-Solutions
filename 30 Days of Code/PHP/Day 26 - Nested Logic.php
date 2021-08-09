<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
fscanf($_fp, "%d %d %d\n", $d1, $m1, $y1);
fscanf($_fp, "%d %d %d\n", $d2, $m2, $y2);

if($y1==$y2){
    if ($m1==$m2){
        if($d1>$d2)
            echo(15*($d1-$d2));
        else
            echo(0);
    }
    else if($m1<$m2)
        echo(0);
    else
        echo(500*($m1-$m2));
}  
else if($y1>$y2)
    echo(10000);
else
    echo(0);
?>
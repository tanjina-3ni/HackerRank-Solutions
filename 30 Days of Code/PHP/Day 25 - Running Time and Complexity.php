<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
$t = (int)readline();
for($i=0; $i<$t; $i++){
    $n = (int)readline();
    $f = 0;
    if ($n==1)
        $f=1;
    else{
        for($j=2; $j<((int)sqrt($n)+1); $j++){
            if($n%$j==0){
                $f=1;
                break;
        }
        }
    }
    if($f==0)
        echo("Prime"."\n");
    else
        echo("Not prime"."\n");
}
?>
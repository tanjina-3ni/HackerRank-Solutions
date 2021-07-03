<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
$t = (int)readline();
for($i=0;$i<$t;$i++){
    $s = readline();
    $e = '';
    $o = '';
    for($j=0;$j<strlen($s);$j++){
        if($j%2==0){
            $e = $e.$s[$j];
        }
        else{
            $o = $o.$s[$j];
        }
    }
    echo($e." ".$o."\n");
}
?>
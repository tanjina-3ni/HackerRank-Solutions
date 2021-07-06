<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
$n = (int)readline();
$dict = array();
for($i=0;$i<$n;$i++){
    $arr = readline();
    $arr = explode(" ", $arr);
    $dict[$arr[0]] = $arr[1];
}
while(1){
    $q = readline();
    if(!$q)
        break;  

    if(array_key_exists($q, $dict)){
        echo $q."=".$dict[$q]."\n";
    } else {
        echo "Not found\n";
    }
}
?>

<?php



$arr = array();

for ($i = 0; $i < 6; $i++) {
    $arr_temp = rtrim(fgets(STDIN));

    $arr[] = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));
}
$m = -9999;
    for ($i=0; $i<4; $i++){
        for ($j=0; $j<4; $j++){
            $s = $arr[$i][$j] + $arr[$i][$j+1] + $arr[$i][$j+2] + $arr[$i+1][$j+1] + $arr[$i+2][$j] + $arr[$i+2][$j+1] + $arr[$i+2][$j+2];
            if ($m<$s)
                $m = $s;
        }
    }
    echo($m);
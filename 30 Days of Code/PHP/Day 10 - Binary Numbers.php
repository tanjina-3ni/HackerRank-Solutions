<?php



$n = intval(trim(fgets(STDIN)));
$n = decbin($n);
$c = 0;
$m = 0;
for ($i=0;$i<strlen($n);$i++){
    if ($n[$i]=='1')
        $c = $c + 1;
    else if ($n[$i]=='0')
        $c = 0;
    if ($m<$c)
        $m=$c;
}
echo($m);
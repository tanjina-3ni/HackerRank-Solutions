<?php

class Check{
    function is_Int(int $v) {
        echo $v;
    }
}

$S = rtrim(fgets(STDIN), "\r\n");
 
try {
    sscanf($S, "%d", $out);
    Check::is_Int($out);
} catch (TypeError $e) {
    echo 'Bad String';
}
?>
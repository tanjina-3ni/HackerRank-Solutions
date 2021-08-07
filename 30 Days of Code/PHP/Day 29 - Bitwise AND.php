<?php

/*
 * Complete the 'bitwiseAnd' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER N
 *  2. INTEGER K
 */

function bitwiseAnd($N, $K) {
    // Write your code here
    if ((($K-1) | $K) <= $N){
        return ($K-1);}
    else{
        return ($K-2);}


}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$t = intval(trim(fgets(STDIN)));

for ($t_itr = 0; $t_itr < $t; $t_itr++) {
    $first_multiple_input = explode(' ', rtrim(fgets(STDIN)));

    $count = intval($first_multiple_input[0]);

    $lim = intval($first_multiple_input[1]);

    $res = bitwiseAnd($count, $lim);

    fwrite($fptr, $res . "\n");
}

fclose($fptr);

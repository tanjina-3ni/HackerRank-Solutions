<?php



$N = intval(trim(fgets(STDIN)));
$name = array();
for ($N_itr = 0; $N_itr < $N; $N_itr++) {
    $first_multiple_input = explode(' ', rtrim(fgets(STDIN)));

    $firstName = $first_multiple_input[0];

    $emailID = $first_multiple_input[1];
    
    if (preg_match("/@gmail.com/", $emailID)){
        array_push($name,$firstName);}
            
    
}

sort($name);

$itr = 0;
while($itr<count($name)){
    print_r($name[$itr]."\n");
    $itr++;
}

?>
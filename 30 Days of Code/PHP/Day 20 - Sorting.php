<?php



$n = intval(trim(fgets(STDIN)));

$a_temp = rtrim(fgets(STDIN));

$a = array_map('intval', preg_split('/ /', $a_temp, -1, PREG_SPLIT_NO_EMPTY));

$swap = 0;
// Write your code here
for ($i = 0; $i < $n; $i++) {
    // Track number of elements swapped during a single array traversal
    $numberOfSwaps = 0;
    
    for ($j = 0; $j < $n - 1; $j++) {
        // Swap adjacent elements if they are in decreasing order
        if ($a[$j] > $a[$j + 1]) {
            $temp = $a[$j];
            $a[$j] = $a[$j + 1];
            $a[$j + 1] = $temp;
            $numberOfSwaps++;
        }
    }
    $swap += $numberOfSwaps;
    // If no elements were swapped during a traversal, array is sorted
    if ($numberOfSwaps == 0) {
        break;
    }
}
echo("Array is sorted in ". $swap ." swaps.\n");
echo("First Element: ".$a[0]."\n");
echo("Last Element: ".$a[$n-1]."\n");
?>
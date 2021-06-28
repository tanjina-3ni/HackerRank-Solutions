<?php
$handle = fopen ("php://stdin","r");
$i = 4;
$d = 4.0;
$s = "HackerRank ";
// Declare second integer, double, and String variables.

// Read and save an integer, double, and String to your variables.
$i_1 = (int)readline();
$d_1 = (float)readline();
$s_1 = readline();
// Print the sum of both integer variables on a new line.
$i = $i + $i_1;
print $i."\n";
// Print the sum of the double variables on a new line.
$d = ($d + $d_1);
printf ("%.1f\n",$d);
// Concatenate and print the String variables on a new line
// The 's' variable above should be printed first.
print ($s.$s_1);
fclose($handle);
?>
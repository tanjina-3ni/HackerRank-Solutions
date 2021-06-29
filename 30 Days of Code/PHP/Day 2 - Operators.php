<?php

/*
 * Complete the 'solve' function below.
 *
 * The function accepts following parameters:
 *  1. DOUBLE meal_cost
 *  2. INTEGER tip_percent
 *  3. INTEGER tax_percent
 */

function solve($meal_cost, $tip_percent, $tax_percent) {
    $tip = ($meal_cost*$tip_percent)/100;
    $tax = ($meal_cost*$tax_percent)/100;
    echo(round($meal_cost+$tip+$tax));

}
?>
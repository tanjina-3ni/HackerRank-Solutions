<?php
interface AdvancedArithmetic{
    public function divisorSum($n);
}

/*
 * Write your code here
 */
class Calculator implements AdvancedArithmetic {
    function divisorSum($n) {
        if ($n==1)
            return 1;
        $i = 1;
        $s = 0;
        while ($i<=(int)sqrt($n)){
            if ($n%$i==0){
                if ($n/$i == $i)
                    $s = $s + $i;
                else
                    $s = $s + ($n/$i) + $i;}
            $i += 1;
        }
        return $s;
    }
}

$n=intval(fgets(STDIN));
$myCalculator=new Calculator();
if($myCalculator instanceof AdvancedArithmetic)//checking if Calculator has implemented AdvancedArithemtic
{
    $sum=$myCalculator->divisorSum($n);
    echo "I implemented: AdvancedArithmetic\n".$sum;
}
else
{
    echo "Wrong answer";// You will get this output if you dont implement
}
?>
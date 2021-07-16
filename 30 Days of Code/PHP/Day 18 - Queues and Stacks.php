<?php

class Solution {
    // Write your code here
    public $stack = [];
    public $top = -1;
    public $queue = [];
    public $front = 0;
    

    public function pushCharacter($item){
        $this->top++;
        array_push($this->stack, $item);
        
    }
    public function popCharacter(){
        $a = $this->stack[$this->top];
        $this->top--;
        //echo($a."\n");
        return $a;
    }
    public function enqueueCharacter($item) {
        array_push($this->queue, $item);
        //echo($this->queue."\n");
    }
    public function dequeueCharacter() {
        $b = $this->queue[$this->front];
        $this->front++;
       // echo($b."\n");
        return $b;
    }
}

// read the string s
$s = fgets(STDIN);

// create the Solution class object p
$obj = new Solution();

$len = strlen($s);
$isPalindrome = true;

// push/enqueue all the characters of string s to stack
for ($i = 0; $i < $len; $i++) {
    $obj->pushCharacter($s{$i});
    $obj->enqueueCharacter($s{$i});
}

/*
pop the top character from stack
dequeue the first character from queue
compare both the characters
*/
for ($i = 0; $i < $len / 2; $i++) {
    if($obj->popCharacter() != $obj->dequeueCharacter()){
        $isPalindrome = false;
    	
        break;
    }
}

//finally print whether string s is palindrome or not.
if ($isPalindrome)
    echo "The word, ".$s.", is a palindrome.";
else
    echo "The word, ".$s.", is not a palindrome.";
?>
<?php

class person {
    protected $firstName, $lastName, $id;
    
    public function __construct($first_name, $last_name, $identification) {
        $this->firstName = $first_name;
        $this->lastName = $last_name;
        $this->id = $identification;
    }
    
    function printPerson() {
        print("Name: {$this->lastName}, {$this->firstName}\n");
        print("ID: {$this->id}\n");
    }
}
class Student extends person {
    private $testScores;
  
    /*	
    *   Class Constructor
    *   
    *   Parameters:
    *   firstName - A string denoting the Person's first name.
    *   lastName - A string denoting the Person's last name.
    *   id - An integer denoting the Person's ID number.
    *   scores - An array of integers denoting the Person's test scores.
    */
    // Write your constructor here
    public function __construct($first_name, $last_name, $id, $scores) {
        $this->firstName = $first_name;
        $this->lastName = $last_name;
        $this->id = $id;
        $this->testScores = $scores;
    }

    /*	
    *   Function Name: calculate
    *   Return: A character denoting the grade.
    */
    // Write your function here
    function printPerson() {
        print("Name: {$this->lastName}, {$this->firstName}\n");
        print("ID: {$this->id}\n");
    }
    
    function calculate(){
        $a = $this->testScores;
        $a = array_filter($a);
        $a = array_sum($a)/count($a);
        switch($a){
            case $a>=90 and $a<=100:
                return "O";
                break;
            case $a>=80 and $a<90:
                return "E";
                break;
            case $a>=70 and $a<80:
                return "A";
                break;
            case $a>=55 and $a<70:
                return "P";
                break;
            case $a>=40 and $a<55:
                return "D";
                break;
            default:
                return "T";
                break;
        
        }
    }
}


$file = fopen("php://stdin", "r");

$name_id = explode(' ', fgets($file));

$first_name = $name_id[0];
$last_name = $name_id[1];
$id = (int)$name_id[2];

fgets($file);

$scores = array_map(intval, explode(' ', fgets($file)));

$student = new Student($first_name, $last_name, $id, $scores);

$student->printPerson();

print("Grade: {$student->calculate()}");
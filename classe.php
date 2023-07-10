<?php

include 'students.php';

class Student {

    public string $name;
    public int $age;
    public string $genre;
    public int $score; 

    public function Approved(){
        if($this->score > 59){
            echo "Congratulations, $this->name! You're approved!".PHP_EOL;
        } else {
            echo "You're reproved, $this->name. Please, focus more in studying.".PHP_EOL;
        }
    }
};

$student1->Approved();
$student2->Approved();
$student3->Approved();
$student4->Approved();
$student5->Approved();
$student6->Approved();
$student7->Approved();
$student8->Approved();
$student9->Approved();
$student10->Approved();
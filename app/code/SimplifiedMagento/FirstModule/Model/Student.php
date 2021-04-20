<?php


namespace SimplifiedMagento\FirstModule\Model;
use SimplifiedMagento\FirstModule\Api\Color;
use SimplifiedMagento\FirstModule\Api\Size;

class Student{
    private $name;
    private $age;
    private $scores;
    public function __construct($studName = "Sam", $studAge = 39, array $studentScores = array('maths' => 92, 'programing' => 90)){
        $this->name = $studName;
        $this->age = $studAge;
        $this->scores = $studentScores;
    }


}

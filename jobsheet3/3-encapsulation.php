<?php
class  Person {
    private $name;

    public function __construct($name) {
    $this->name = $name;
    }

    public function getName() {
    return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }
}

class Student extends Person {
    public function __construct($name, $studentID) {
        parent::__construct($name);
        $this->studentID = $studentID;
    }

    public function getStudentID() {
        return $this->studentID;
    }

    public function setStudentID($studentID) {
        $this->studentID = $studentID;
    }
}

$student = new Student("Tiara Dinda", "230102045");
echo $student->getName() . " has Student ID " . $student->getStudentID() . "<br>";
$student->setName("Alifia Putri");
$student->setStudentID("230302025");
echo $student->getName() . " has Student ID " . $student->getStudentID(); 
?>
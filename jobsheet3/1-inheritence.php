<?php
class  Person {
    protected $name;

    public function __construct($name) {
    $this->name = $name;
    }

    public function getName() {
    return $this->name;
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
}

$student = new Student("Tiara Dinda", "S123456");
echo $student->getName() . " has Student ID " . $student->getStudentID(); 
?>
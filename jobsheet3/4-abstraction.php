<?php
// Kelas abstrak Course
abstract class Course {
    // Metode abstrak untuk mendapatkan detail kursus
    abstract public function getCourseDetails();
}

// Kelas turunan OnlineCourse
class OnlineCourse extends Course {
    private $title;
    private $duration;
    private $platform;

    public function __construct($title, $duration, $platform) {
        $this->title = $title;
        $this->duration = $duration;
        $this->platform = $platform;
    }

    // Implementasi metode abstrak
    public function getCourseDetails() {
        return "Online Course: {$this->title}, Duration: {$this->duration}, Platform: {$this->platform}";
    }
}

// Kelas turunan OfflineCourse
class OfflineCourse extends Course {
    private $title;
    private $duration;
    private $location;

    public function __construct($title, $duration, $location) {
        $this->title = $title;
        $this->duration = $duration;
        $this->location = $location;
    }

    // Implementasi metode abstrak
    public function getCourseDetails() {
        return "Offline Course: {$this->title}, Duration: {$this->duration}, Location: {$this->location}";
    }
}

// Contoh penggunaan
$onlineCourse = new OnlineCourse("PHP Programming", "4 weeks", "Laravel");
echo $onlineCourse->getCourseDetails() . "<br>"; 
$offlineCourse = new OfflineCourse("Jaringan Komputer", "2 days", "Jakarta");
echo $offlineCourse->getCourseDetails(); 

?>

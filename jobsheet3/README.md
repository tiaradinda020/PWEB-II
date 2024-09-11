<h1> JOBSHEET 3</h1>

<h2>1. Inheritance </h2>

- Membuat sebuah kelas bernama Person.

  ```bash
  class Person {
      protected $name;
  ```
- Metode ini mengembalikan nilai properti $name.
  ```bash
   public function getName() {
        return $this->name;
    }
  ```
  
- Membuat kelas Student yang merupakan turunan dari kelas Person
    
    ```bash
    class Student extends Person {
    ```
-  Constructor kelas Student menerima dua parameter: $name dan $studentID.
  
    ```bash
    public function __construct($name, $studentID) {
        parent::__construct($name);
        $this->studentID = $studentID;
    }
    ```
  - Mengatur nilai properti $studentID dengan nilai parameter yang diterima.

    ```bash
     public function getStudentID() {
        return $this->studentID;
    }
    ```
  <h2> OUTPUT Inheritance</h2>




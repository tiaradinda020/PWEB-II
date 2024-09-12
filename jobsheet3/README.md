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
  <h2> OUTPUT inheritance </h2>

  ![inher](https://github.com/user-attachments/assets/56aefc7a-8832-498d-a3ed-bbfa04df5d8b)

  <h2>2. Polymorphism</h2>

  - Kelas Teacher adalah turunan dari Person dan Properti teacherID bersifat private.

    ```bash
    class Teacher extends Person {
    private $teacherID;
    ```
  - Metode ini mengoverride metode getName() dari kelas Person untuk menambahkan prefix "Student: " sebelum nama yang didapat dari parent::getName() dan memanggil metode getName() asli dari kelas induk (Person).
   
    ```bash
    public function getName() {
      return "Student: " . parent::getName();
    }
    ```

  - metode ini mengoverride getName() dari kelas induk Person untuk menambahkan prefix "Teacher: " sebelum nama.
  
    ```bash
    public function getName() {
        return "Teacher: " . parent::getName();
    }
    ```
<h2> OUTPUT Polymorphism</h2>

  ![poly](https://github.com/user-attachments/assets/590c5cce-c75b-4f47-a7fd-bbd9d2dcd849)

    
<h2>3. Encapsulation </h2>

- Deklarasi properti name dengan akses private, artinya hanya dapat diakses dari dalam kelas Person saja.

  ```bash
  private $name;
  ```

- Properti studentID bersifat private, artinya hanya dapat diakses dari dalam kelas Student.

  ```bash
  private $studentID;
  ```
- Fungsi setter untuk mengubah nilai properti $name dan  Fungsi getter untuk mengembalikan nilai properti $name.
  
    ```bash
    public function getName() {
          return $this->name;
      }
    public function setName($name) {
          $this->name = $name;
      }
    ```
- Fungsi getter untuk mengembalikan nilai properti studentID dan Fungsi setter untuk mengubah nilai properti studentID.

    ```bash
    public function getStudentID() {
          return $this->studentID;
      }
  
      public function setStudentID($studentID) {
          $this->studentID = $studentID;
      }
    ```
<h2> Output Encapsulation </h2>

  ![encap](https://github.com/user-attachments/assets/3643c6d4-2f24-496a-be06-e6280332f9fb)

<h2>4. Abstraction</h2>

- Kelas Course adalah kelas abstrak dan Metode getCourseDetails() adalah metode abstrak, yang berarti tidak memiliki implementasi dalam kelas ini.
  
  ```bash
  abstract class Course {
    // Metode abstrak untuk mendapatkan detail kursus
    abstract public function getCourseDetails();
  }
  ```

-  Metode getCourseDetails() di kelas OnlineCourse memberikan detail kursus online dengan menampilkan teks yang menunjukkan bahwa ini "Online Course"
  ```bash
    public function getCourseDetails() {
      return "Online Course: {$this->title}, Duration: {$this->duration}, Platform: {$this->platform}";
  }
  ```

- Metode getCourseDetails() di kelas OfflineCourse memberikan detail kursus offline dengan menampilkan teks yang menunjukkan bahwa ini "Offline Course".
```bash
  public function getCourseDetails() {
    return "Offline Course: {$this->title}, Duration: {$this->duration}, Location: {$this->location}";
}
 ```

<h2> OUTPUT Abstraction </h2>

![abstrak](https://github.com/user-attachments/assets/a3a11c38-e2b2-4263-a786-79e7db7fe3dd)


<h2> TUGAS </h2>

- Implementasikan kelas Person sebagai induk dari Dosen dan Mahasiswa.

    ```bash
    <?php
  class Person {
      protected $nama;
      protected $umur;
  
      public function tampilkanData() {
          return $this->nama;
      }
  
      public function getRole() {
          return "Person";
      }
  
      public function setNama($nama) {
          $this->nama = $nama;
      }
  
      public function setUmur($umur) {
          $this->umur = $umur;
      }
  }
  ```
- konsep Inheritance untuk membuat hierarki kelas yang memungkinkan
Dosen dan Mahasiswa memiliki atribut dan metode yang sesuai dengan perannya.

```bash
class Dosen extends Person {
    private $nidn;

    public function tampilkanData() {
        return "Nama: $this->nama, Umur: $this->umur, NIDN: $this->nidn";
    }

    public function getRole() {
        return "Dosen";
    }

    public function setNidn($nidn) {
        $this->nidn = $nidn;
    }

    public function getNidn() {
        return $this->nidn;
    }
}
```

```bash
class Mahasiswa extends Person {
    private $nim;

    public function tampilkanData() {
        return "Nama: $this->nama, Umur: $this->umur, NIM: $this->nim";
    }

    public function getRole() {
        return "Mahasiswa";
    }

    public function setNim($nim) {
        $this->nim = $nim;
    }

    public function getNim() {
        return $this->nim;
    }
}
```

- Polymorphism dengan membuat metode getRole() di kelas Person dan
override metode ini di kelas Dosen dan Mahasiswa untuk menampilkan peran yang berbeda.

```bash
public function getRole() {
        return "Dosen";
    }
```

```bash
public function getRole() {
        return "Mahasiswa";
    }
```

- Encapsulation untuk melindungi atribut nidn di kelas Dosen dan nim di
kelas Mahasiswa.

```bash
private $nidn; // encapsulation dosen
private $nim; // encapsulation mahasiswa
```

- kelas abstrak Jurnal dan implementasikan konsep Abstraction dengan
membuat kelas turunan JurnalDosen dan JurnalMahasiswa yang masing-masing
memiliki cara tersendiri untuk mengelola pengajuan jurnal.

```
abstract class Jurnal {
    protected $judul;
    protected $penulis;

    public function setJudul($judul) {
        $this->judul = $judul;
    }

    public function setPenulis($penulis) {
        $this->penulis = $penulis;
    }

    abstract public function kelolaPengajuan();

    public function getJudul() {
        return $this->judul;
    }

    public function getPenulis() {
        return $this->penulis;
    }
}
```


```bash
class JurnalDosen extends Jurnal {
    private $nidn;

    public function kelolaPengajuan() {
        return "Judul: '$this->judul', NIDN: $this->nidn.<br>";
    }

    public function setNidn($nidn) {
        $this->nidn = $nidn;
    }
}
```

```bash
class JurnalMahasiswa extends Jurnal {
    private $nim;

    public function kelolaPengajuan() {
        return "Judul: {$this->getJudul()} <br> Nama: {$this->getPenulis()} <br> NIM: {$this->nim}<br>";
    }

    public function setNim($nim) {
        $this->nim = $nim;
    }
}
```

<h2> OUTPUT TUGAS </h2>

  ![tugas3](https://github.com/user-attachments/assets/20480ce4-8e18-4728-890d-1b09e8c22e08)



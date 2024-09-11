<H1>JOBSHEET1</H1>

Object-Oriented Programming (OOP) adalah pemrograman yang
berfokus pada konsep objek.

<h2> Konsep PHP OOP </h2>

 ### Kelas (Class)

Class adalah template untuk  menyimpan objek
Object: Instance dari class yang memiliki atribut (properties) dan perilaku
(methods).
```bash
class Mahasiswa {
```

### Object (Objek)

Objek adalah instance dari kelas. Setelah sebuah kelas didefinisikan, kita bisa membuat objek dari kelas tersebut dengan menggunakan kata kunci new.

```bash
$mahasiswa = new Mahasiswa("Tiara Dinda");
```

### Private

```bash
    private $nama;
    private $nim;
    private $jurusan;
```
Membatasi akses langsung dari luar kelas, sehingga data hanya bisa diakses atau diubah melalui metode publik.

### Constructor
```bash
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
```
Digunakan untuk menginisialisasi nilai-nilai atribut $nama, $nim, dan $jurusan saat objek Mahasiswa.
### Metode Getter 
```bash
    public function getNama() {
        return $this->nama;
    }
```
Digunakan untuk mendapatkan nilai atribut privat.
### Metode Setter
```bash
    public function setNama() {
        return $this->nama;
    }
```
Digunakan untuk mengubah nilai atribut privat.

### Instansiasi
penggunaan kelas sebagai blueprint untuk menciptakan objek dengan data dan perilaku spesifik.

```bash
$mahasiswa = new Mahasiswa("Tiara Dinda Arumningtyas", "230102045", "Teknik Informatika");
```
Menyimpan informasi lengkap mengenai seorang mahasiswa dan datanya disimpan dalam privat

### Mengakses Data

```bash
echo $mahasiswa->getNama() . "<br>"; // Output: Tiara Dinda Arumningtyas
echo $mahasiswa->getNim() . "<br>"; // Output: 230102045
echo $mahasiswa->getJurusan() . "<br>"; // Output: Teknik Informatika
```
Data diakses menggunakan metode getter dan ditampilkan menggunakan echo.

  ### Protected
  ```bash
  protected $nama;
  ```
  Atribut ini dapat diakses oleh kelas itu sendiri dan kelas turunan (child class).
  ### Extends
  ```bash
  class Dosen Extends Pengguna {
    private $mataKuliah;
  public function __construct($nama, $mataKuliah) {
  parent::__construct($nama);
        $this->mataKuliah = $mataKuliah;
    }
  ```
  Dosen mewarisi properti dan metode Pengguna (termasuk properti protected seperti $nama dan metode public seperti getNama().

<h2> PRINSIP-PRINSIP PHP OOP</h2>

 ## Encapsulation

 - Menyembunyikan detail implementasi dan hanya memberikan
akses melalui metode tertentu.

  ```bash
  <?php 
// Definisi class
class Mahasiswa {
    // Atribut dengan akses private
    private $nama;
    private $nim;
    private $jurusan;

    // Constructor
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // Metode getter Nama
    public function getNama() {
        return $this->nama;
    }

    //Metode setter Nama
    public function setNama($nama) {
        $this->nama = $nama;
    }

    public function getNim() {
        return $this->nim;
    }

    public function setNim($nim) {
        $this->nim = $nim;
    }

    public function getJurusan() {
        return $this->jurusan;
    }

    public function setJurusan($jurusan) {
        $this->jurusan = $jurusan;
    }
}

// Instansiasi Objek 
$mahasiswa = new Mahasiswa("Tiara Dinda Arumningtyas", "230102045", "Teknik Informatika");

// Mengakses data dengan metode getter
echo $mahasiswa->getNama() . "<br>"; // Output: Tiara Dinda Arumningtyas
echo $mahasiswa->getNim() . "<br>"; // Output: 230102045
echo $mahasiswa->getJurusan() . "<br>"; // Output: Teknik Informatika

?>
```

Menyembunyikan detail implementasi dan hanya memberikan
akses melalui metode tertentu.

 ## Inheritance
 
- Kelas dapat mewarisi properti dan metode dari kelas lain.

     ```bash
     <?php
   class Pengguna {
       protected $nama; 
   
       // Constructor
       public function __construct($nama) {
           $this->nama = $nama;
       }
   
       public function getNama() {
           return $this->nama;
       }   
   }
   
   // Definisi class Dosen yang mewarisi class Pengguna
   class Dosen Extends Pengguna {
       private $mataKuliah;
   
       // Constructor
       public function __construct($nama, $mataKuliah) {
   
           // Memanggil constructor parent class Pengguna
           parent::__construct($nama);
           $this->mataKuliah = $mataKuliah;
       }
   
       
       public function getMataKuliah() {
           return $this->mataKuliah;
       }
   }
   
   // Instansiasi 
   $dosen = new Dosen("Prih Diantono Abda'u", "Praktikum WEB II");
   echo $dosen->getNama() . "<br>"; //Output: Prih Diantono Abda'u
   echo $dosen->getMataKuliah() . "<br>"; //Output: Praktikum WEB II
   ?>
   ```
 ## Polymorphism
 
- Metode yang sama dapat memiliki implementasi berbeda
    dalam class yang berbeda.

    ```bash
    <?php
    //Definisi class pengguna
    class Pengguna {
        protected $nama;
    
        // Constructor untuk menginisialisasi nama
        public function __construct($nama) {
            $this->nama = $nama;
        }
    
        // Metode aksesFitur 
        public function aksesFitur() {
            return "Pengguna $this->nama memiliki akses dasar";
        }
    }
    
    class Mahasiswa extends Pengguna {
        public function __construct($nama) {
            parent::__construct($nama);
        }
    
        // Implementasi khusus metode aksesFitur untuk Mahasiswa
        public function aksesFitur() {
            return "Mahasiswa $this->nama dapat mengakses fitur absen dan tugas";
        }
    }
    
    class Dosen extends Pengguna {
        public function __construct($nama){
            parent::__construct($nama);
        }
    
        // Implementasi khusus metode aksesFitur untuk Dosen
        public function aksesFitur() {
            return "Dosen $this->nama dapat mengakses fitur pengelolaan kelas dan pemberian nilai.";
        }
    }
    
    $mahasiswa = new Mahasiswa("Tiara Dinda"); // Menampilkan hasil akses fitur Mahasiswa
    echo $mahasiswa->aksesFitur() . "<br>"; 
    $dosen = new Dosen("Bapak Prih Diantono Abda'u");
    echo $dosen->aksesFitur(); // Menampilkan hasil akses fitur Dosen
    ?>
    ```
    
    ```bash
    public function aksesFitur() {
            return "Mahasiswa $this->nama dapat mengakses fitur absen dan tugas";
        }
    ```
Metode ini merupakan kelas turunan dari kelas Pengguna, dan mereka mengimplementasikan ulang metode dengan fungsi yang berbeda.

 ## Abstraction
- Menyembunyikan detail implementasi dan hanya menampilkan
    fungsi penting.
  
    ```bash
    <?php
    abstract class Pengguna {
        protected $nama;
    
        // Constructor pada class abstrak
        public function __construct($nama) {
            $this->nama = $nama;
        }
    
        // Metode abstrak yang harus diimplementasikan oleh subclass
        abstract public function aksesFitur();
    }
    
    // Definisi class Mahasiswa yang mengimplementasikan class Pengguna
    class Mahasiswa extends Pengguna {
        public function __construct($nama) {
            parent::__construct($nama);
        }
    
        // Implementasi metode aksesFitur untuk class Mahasiswa
        public function aksesFitur() {
            return "Mahasiswa $this->nama dapat mengakses fitur pendaftaran kelas dan tugas.";
        }
    }
    
    // class Dosen yang mengimplementasikan class Pengguna
    class Dosen extends Pengguna {
        public function __construct($nama) {
            parent::__construct($nama);
        }
    
        // Implementasi metode aksesFitur untuk class Dosen
        public function aksesFitur() {
            return "Dosen $this->nama dapat mengakses fitur manajemen kelas dan penilaian.";
        }
    }
    
    // Membuat objek dari class Mahasiswa dan Dosen
    $mahasiswa = new Mahasiswa("Tiara Dinda");
    $dosen = new Dosen("Bapak Abda'u");
    
    echo $mahasiswa->aksesFitur() . "<br>"; 
    echo $dosen->aksesFitur(); // 
    ?>
    ```
    
## Abstract Class Pengguna

- mendefinisikan kelas abstrak yang tidak dapat diinstansiasi secara langsung.
    
    ```bash
    abstract class Pengguna {
    protected $nama;
    ```
- Kelas Pengguna adalah kelas abstrak yang tidak dapat diinstansiasi langsung. Kelas ini dirancang untuk menjadi superclass dari kelas lain yang akan mengimplementasikan fungsionalitas lebih lanjut.

    ```bash
     abstract public function aksesFitur();
    ```
 - metode abstrak tanpa implementasi. Kelas yang mewarisi Pengguna harus menyediakan implementasi untuk metode ini.

## OUTPUT Membuat Object dan Class
![object](https://github.com/user-attachments/assets/8b9382e4-8ab9-4d56-acdf-695df321c6cb)

## OUTPUT Membuat Encapsulation
![encapsulation](https://github.com/user-attachments/assets/acd47397-703c-4771-85d6-c91f8733c967)

## OUTPUT Membuat Inheritance
![inheritance](https://github.com/user-attachments/assets/405c99d2-eb3f-4bf6-bab1-396b91d93129)

## OUTPUT Membuat Polymorphism
![polymor](https://github.com/user-attachments/assets/66f0f150-3415-480a-93e8-5262c95e230d)

## OUTPUT Membuat Abstraction
![abstraction](https://github.com/user-attachments/assets/6acfbfbc-bbc1-4d68-a2a4-654bd8eaff09)

<H1>JOBSHEET1</H1>

Object-Oriented Programming (OOP) adalah pemrograman yang
berfokus pada konsep objek.

 ### Kelas (Class)

Class adalah template untuk  menyimpan objek
Object: Instance dari class yang memiliki atribut (properties) dan perilaku
(methods).
```bash
class Mahasiswa {
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

- ## Encapsulation
Menyembunyikan detail implementasi dan hanya memberikan
akses melalui metode tertentu.

 - ## Inheritance
Kelas dapat mewarisi properti dan metode dari kelas lain.
  
- ## Polymorphism
Metode yang sama dapat memiliki implementasi berbeda
    dalam class yang berbeda.
    
    ```bash
    public function aksesFitur() {
            return "Mahasiswa $this->nama dapat mengakses fitur absen dan tugas";
        }
    ```
Metode ini merupakan kelas turunan dari kelas Pengguna, dan mereka mengimplementasikan ulang metode dengan fungsi yang berbeda.

- ## Abstraction
Menyembunyikan detail implementasi dan hanya menampilkan
    fungsi penting.
    
    ### Abstract Class Pengguna 
mendefinisikan kelas abstrak yang tidak dapat diinstansiasi secara langsung.
    
    ```bash
    abstract class Pengguna {
    protected $nama;
    ```
Kelas Pengguna adalah kelas abstrak yang tidak dapat diinstansiasi langsung. Kelas ini dirancang untuk menjadi superclass dari kelas lain yang akan mengimplementasikan fungsionalitas lebih lanjut.

    ```bash
     abstract public function aksesFitur();
    ```
 metode abstrak tanpa implementasi. Kelas yang mewarisi Pengguna harus menyediakan implementasi untuk metode ini.

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

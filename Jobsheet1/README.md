<H1>JOBSHEET1</H1>

Object-Oriented Programming (OOP) adalah pemrograman yang
berfokus pada konsep objek.

## Konsep Dasar OOP
- Encapsulation: Menyembunyikan detail implementasi dan hanya memberikan
akses melalui metode tertentu.
### Class 

Class adalah template untuk  menyimpan objek

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
// Constructor
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
```
Digunakan untuk menginisialisasi nilai-nilai atribut $nama, $nim, dan $jurusan saat objek Mahasiswa.
### Metode Getter 
```bash
    // Metode getter Nama
    public function getNama() {
        return $this->nama;
    }
```
Digunakan untuk mendapatkan nilai atribut privat.
### Metode Setter
```bash
    // Metode getter Nama
    public function setNama() {
        return $this->nama;
    }
```
Digunakan untuk mengubah nilai atribut privat.
### Instansiasi Objek

- Inheritance: Kelas dapat mewarisi properti dan metode dari kelas lain.
- Polymorphism: Metode yang sama dapat memiliki implementasi berbeda
dalam class yang berbeda.
- Abstraction: Menyembunyikan detail implementasi dan hanya menampilkan
fungsi penting.


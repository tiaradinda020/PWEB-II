# JOBSHEET 2

<h2>1. Membuat Class dan Object</h2>

-  Kelas(class) mendefinisikan atribut dan metode yang dimiliki oleh objek. Dibawah ini yang dimaksud atribut adalah nama,nim,dan jurusan yang dimiliki objek mahasiswa.

  ```bash
  class Mahasiswa {
      public $nama;
      public $nim;
      public $jurusan;
  ```

- Deklarasi Fungsi: metode ini dapat diakses dari mana saja, baik dari dalam maupun luar kelas tempat metode ini dideklarasikan.
- return adalah perintah untuk mengembalikan nilai dari metode tersebut. variabel tersebut adalah properti dari objek,  properti dari objek yang diakses melalui $this. 
  ```bash
  public function tampilkanData() {
          return "Mahasiswa ini bernama $this->nama, nim $this->nim, jurusan $this->jurusan.";
      }
  ```
- 
  

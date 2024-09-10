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
## OUTPUT Membuat Class dan Object


<h2>2. Implementasi Constructor</h2>

- metode yang akan dijalankan secara otomatis setiap kali sebuah objek baru dibuat. ($nama, $nim, $jurusan) adalah parameter yang diterima oleh constructor.

  ```bash
      public function __construct($nama, $nim, $jurusan) {
          $this->nama = $nama;
          $this->nim = $nim;
          $this->jurusan = $jurusan;
      }
  ```
<h2>3. Membuat Metode Tambahan</h2>

- Deklarasi metode bernama updateJurusan yang menerima satu parameter ($newJurusan). $this->jurusan = $newJurusan;, metode ini mengubah nilai properti jurusan pada objek yang bersangkutan menjadi nilai baru yang diberikan ($newJurusan).
   
  ```bash
  // Metode updateJurusan
      public function updateJurusan($newJurusan) {
          $this->jurusan = $newJurusan;
      }
  ```

- Memanggil metode updateJurusan() pada objek $mahasiswa1 dengan argumen "Teknik Informatika". Metode ini mengubah nilai properti jurusan pada objek $mahasiswa1 dari "Komputer dan Bisnis" menjadi "Teknik Informatika".
  
   ```bash
  $mahasiswa1 = new Mahasiswa("Tiara Dinda A", "230102045", "Komputer dan Bisnis");
  echo $mahasiswa1->tampilkanData() . "<br>";
  $mahasiswa1->updateJurusan("Teknik Informatika");
  echo $mahasiswa1->tampilkanData();
  ?>
  ``` 

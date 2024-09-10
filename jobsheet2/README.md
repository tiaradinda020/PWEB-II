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

![class](https://github.com/user-attachments/assets/ad3a64af-471e-4b1a-8570-d41e8cb1ad92)


<h2>2. Implementasi Constructor</h2>

- metode yang akan dijalankan secara otomatis setiap kali sebuah objek baru dibuat. ($nama, $nim, $jurusan) adalah parameter yang diterima oleh constructor.

  ```bash
      public function __construct($nama, $nim, $jurusan) {
          $this->nama = $nama;
          $this->nim = $nim;
          $this->jurusan = $jurusan;
      }
  ```

  ## OUTPUT Implementasi Constructor

  ![constructor](https://github.com/user-attachments/assets/a5d04c33-ef46-485c-bfb0-f0c50d4b8664)

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
## OUTPUT Membuat Metode Tambahan

![tambahan](https://github.com/user-attachments/assets/42ffaf7c-9614-4f28-b22b-7082117eb51a)


<h2>4. Penggunaan Atribut dan Metode</h2>

-  Deklarasi metode bernama setNim yang menerima satu parameter, yaitu $newNim. $this->nim adalah properti dari objek yang mewakili NIM mahasiswa. untuk mengubah nilai properti nim pada objek tersebut menjadi nilai baru yang diberikan 

  ```bash
      public function setNim($newNim) {
          $this->nim = $newNim;
      }
  ```
- Metode ini mengubah nilai properti nim pada objek $mahasiswa1 dari "230102045" menjadi "230202045".

    ```bash
      $mahasiswa1 = new Mahasiswa("Tiara Dinda A", "230102045", "Komputer dan Bisnis");
      echo $mahasiswa1->tampilkanData() . "<br>";
      $mahasiswa1->setNim("230202045");
      echo $mahasiswa1->tampilkanData();
      ?>
    ```

## OUTPUT Penggunaan Atribut dan Metode
![atribut](https://github.com/user-attachments/assets/c6097fa6-1b96-4f14-9f4b-611237c10ead)

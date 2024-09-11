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
- return adalah Return Value adalah sebuah nilai yang dikembalikan oleh fungsi / method, saat fungsi / method tersebut dipanggil.
  
  ```bash
  public function tampilkanData() {
          return "Mahasiswa ini bernama $this->nama, nim $this->nim, jurusan $this->jurusan.";
      }
  ```
- Instansiasi objek dari class Mahasiswa dan tampilan data mahasiswa.

    ```bash
    $mahasiswa = new Mahasiswa("Tiara Dinda Arumningtyas", "230102045", "Komputer dan Bisnis");
  echo $mahasiswa->tampilkanData();
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
- Metode untuk mengatur nilai awal dari atribut saat objek dibuat.
  
  ```bash
  $mahasiswa1 = new Mahasiswa("Tiara Dinda A", "230102045", "Komputer dan Bisnis");
  ```

  ## OUTPUT Implementasi Constructor

  ![constructor](https://github.com/user-attachments/assets/a5d04c33-ef46-485c-bfb0-f0c50d4b8664)

<h2>3. Membuat Metode Tambahan</h2>

- Metode updateJurusan yang menerima satu parameter ($newJurusan). $this->jurusan = $newJurusan;, metode ini mengubah nilai properti jurusan pada objek yang bersangkutan menjadi nilai baru yang diberikan ($newJurusan).
   
    ```bash
    // Metode updateJurusan
        public function updateJurusan($newJurusan) {
            $this->jurusan = $newJurusan;
        }
    ```

-  Metode ini mengubah nilai properti jurusan pada objek $mahasiswa1 dari "Komputer dan Bisnis" menjadi "Teknik Informatika".
  
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

- Untuk mengubah nilai properti nim pada objek tersebut menjadi nilai baru yang diberikan nim pada objek $mahasiswa1 dari "230102045" menjadi "230202045".

  ```bash
      public function setNim($newNim) {
          $this->nim = $newNim;
      }
  ```
  
- Tampilkan data mahasiswa yang sudah diperbarui dengan memanggil metode
tampilkanData().

    ```bash
      $mahasiswa1 = new Mahasiswa("Tiara Dinda A", "230102045", "Komputer dan Bisnis");
      echo $mahasiswa1->tampilkanData() . "<br>";
      $mahasiswa1->setNim("230202045");
      echo $mahasiswa1->tampilkanData();
      ?>
    ```

## OUTPUT Penggunaan Atribut dan Metode
![atribut](https://github.com/user-attachments/assets/c6097fa6-1b96-4f14-9f4b-611237c10ead)

<h2>5.TUGAS </h2>

```bash
<?php
// Implementasi kelas dosen
class Dosen {
    public $nama;
    public $nip;
    public $mataKuliah;

    public function __construct($nama, $nip, $mataKuliah) {
        $this->nama = $nama;
        $this->nip = $nip;
        $this->mataKuliah = $mataKuliah;
    }

    //metode menampilkan informasi dosen
    public function tampilkanDosen() {
        return "Nama: $this->nama <br>Nip: $this->nip <br>MataKuliah: $this->mataKuliah.";
    }
}

    // Membuat objek dari kelas dosen dan tampil informasi dosen
    $dosen1 = new Dosen("Bapak Prih Dianto Abda'u", "12345678", "Pemrograman WEB");
    echo $dosen1->tampilkanDosen();
?>
```

## OUTPUT TUGAS

![tugas](https://github.com/user-attachments/assets/6f25e57c-2d79-4c2b-a7ff-981a3283d1f4)

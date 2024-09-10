<?php
class Mahasiswa {
    public $nama;
    public $nim;
    public $jurusan;

    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    public function tampilkanData() {
        return "Mahasiswa: $this->nama, dengan nim $this->nim, jurusan $this->jurusan.";
    }
    // Metode updateJurusan
    public function updateJurusan($newJurusan) {
        $this->jurusan = $newJurusan;
    }
}

$mahasiswa1 = new Mahasiswa("Tiara Dinda A", "230102045", "Komputer dan Bisnis");
echo $mahasiswa1->tampilkanData() . "<br>";
$mahasiswa1->updateJurusan("Teknik Informatika");
echo $mahasiswa1->tampilkanData();
?>
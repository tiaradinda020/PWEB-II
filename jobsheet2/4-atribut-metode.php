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
        return "Mahasiswa ini bernama: $this->nama, nim $this->nim, jurusan $this->jurusan.";
    }

    // metode setter 
    public function setJurusan($newJurusan) {
        $this->jurusan = $newJurusan;
    }

    // metode setter
    public function setNim($newNim) {
        $this->nim = $newNim;
    }
}

$mahasiswa1 = new Mahasiswa("Tiara Dinda A", "230102045", "Komputer dan Bisnis");
echo $mahasiswa1->tampilkanData() . "<br>";
$mahasiswa1->setNim("230202045");
echo $mahasiswa1->tampilkanData();
?>
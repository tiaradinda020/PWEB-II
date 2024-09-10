<?php
class Mahasiswa {
    public $nama;
    public $nim;
    public $jurusan;

    //Implementasi Constructor
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    public function tampilkanData() {
        return "Mahasiswa bernama $this->nama, dengan nim $this->nim, jurusan $this->jurusan.";
    }
}

$mahasiswa1 = new Mahasiswa("Tiara Dinda A", "230102045", "Komputer dan Bisnis");
echo $mahasiswa1->tampilkanData();
?>
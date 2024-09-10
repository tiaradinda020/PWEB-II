<?php
class Mahasiswa {
    public $nama;
    public $nim;
    public $jurusan;

    public function tampilkanData() {
        return "Mahasiswa ini bernama $this->nama, nim $this->nim, jurusan $this->jurusan.";
    }
}

$mahasiswa = new Mahasiswa("Tiara Dinda Arumningtyas", "230102045", "Komputer dan Bisnis");
echo $mahasiswa->tampilkanData();
?>
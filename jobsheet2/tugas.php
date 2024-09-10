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

    //metode tampilkanData
    public function tampilkanDosen() {
        echo "Nama Dosen: " . $this->nama . "<br>";
        echo "NIP: " . $this->nip . "<br>";
        echo "Mata Kuliah: " . $this->mataKuliah . "<br>";
    }
}

    // Membuat objek dari kelas dosen
    $dosen1 = new Dosen("Bapak Prih Dianto Abda'u", "12345678", "Pemrograman WEB");
    $dosen1->tampilkanDosen();
?>
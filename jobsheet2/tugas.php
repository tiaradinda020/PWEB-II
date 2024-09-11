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

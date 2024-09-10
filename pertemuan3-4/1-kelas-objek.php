<?php
class Mobil {
    public $merk;
    public $warna;

    public function __construct($merk, $warna) {
        $this->merk = $merk;
        $this->warna = $warna;
    }

    public function deskripsi() {
        return "Mobil ini adalah $this->merk berwarna $this->warna.";
    }
}
    $mobil = new Mobil("Toyota", "Hitam");
    echo $mobil->deskripsi();
?>
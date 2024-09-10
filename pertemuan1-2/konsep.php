<?php
//Definisi Class
class Buku {
    //Atribut atau Properties
    public $judul;
    public $penulis;

    //Constructor
    public function _construct($judul, $penulis) {
        $this->judul = $judul;
        $this->judul = $penulis;
    }

    //Metode atau Function
    public function tampilkaninfo() {
        return "Judul: $this->judul, Penulis: $this->penulis";
    }
}

//Instansiasi Objek 
$buku1 = new Buku("Pemrograman PHP", "Andi Prasetyo");
echo $buku1->tampilkaninfo();
?>
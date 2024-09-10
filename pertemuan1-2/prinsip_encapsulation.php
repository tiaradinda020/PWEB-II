<?php 
class Buku {
    private $judul;
    private $penulis;

    public function __construct($judul, $penulis) {
        $this->judul = $judul;
        $this->penulis = $penulis;
    }

    public function getJudul() {
        return $this->judul;
    }

    public function getPenulis() {
        return $this->penulis;
    }

    public function setJudul($judul) {
        $this->judul = $judul;
    }
}

$buku1 = new Buku("Pemrograman PHP", "Andi Prasetyo");
echo $buku1->getJudul() . "<br>"; // Output: Pemrograman PHP
echo $buku1->getPenulis() . "<br>"; // Output: Andi Prasetyo
?>
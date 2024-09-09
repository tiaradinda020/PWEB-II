<?php
//Class pengguna
class Pengguna {
    protected $nama; 

    // Constructor
    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function getNama() {
        return $this->nama;
    }   
}

// Definisi class Dosen yang mewarisi class Pengguna
class Dosen Extends Pengguna {
    private $mataKuliah;

    // Constructor
    public function __construct($nama, $mataKuliah) {

        // Memanggil constructor parent class Pengguna
        parent::__construct($nama);
        $this->mataKuliah = $mataKuliah;
    }

    
    public function getMataKuliah() {
        return $this->mataKuliah;
    }
}

// Instansiasi 
$dosen = new Dosen("Prih Diantono Abda'u", "Praktikum WEB II");
echo $dosen->getNama() . "<br>"; //Output: Prih Diantono Abda'u
echo $dosen->getMataKuliah() . "<br>"; //Output: Praktikum WEB II
?>
<?php 
// Definisi class
class Mahasiswa {
    // Atribut dengan akses private
    private $nama;
    private $nim;
    private $jurusan;

    // Constructor
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // Metode getter Nama
    public function getNama() {
        return $this->nama;
    }

    //Metode setter Nama
    public function setNama($nama) {
        $this->nama = $nama;
    }

    // Metode getter Nim
    public function getNim() {
        return $this->nim;
    }

    //Metode setter Nim
    public function setNim($nim) {
        $this->nim = $nim;
    }

    //Metode getter Jurusan
    public function getJurusan() {
        return $this->jurusan;
    }

    //Metode setter Jurusan
    public function setJurusan($jurusan) {
        $this->jurusan = $jurusan;
    }
}

// Instansiasi Objek 
$mahasiswa = new Mahasiswa("Tiara Dinda Arumningtyas", "230102045", "Teknik Informatika");

// Mengakses data dengan metode getter
echo $mahasiswa->getNama() . "<br>"; // Output: Tiara Dinda Arumningtyas
echo $mahasiswa->getNim() . "<br>"; // Output: 230102045
echo $mahasiswa->getJurusan() . "<br>"; // Output: Teknik Informatika

?>
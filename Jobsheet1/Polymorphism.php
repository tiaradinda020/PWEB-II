<?php
//Definisi class pengguna
class Pengguna {
    protected $nama;

    // Constructor untuk menginisialisasi nama
    public function __construct($nama) {
        $this->nama = $nama;
    }

    // Metode aksesFitur 
    public function aksesFitur() {
        return "Pengguna $this->nama memiliki akses dasar";
    }
}

class Mahasiswa extends Pengguna {
    public function __construct($nama) {
        parent::__construct($nama);
    }

    // Implementasi khusus metode aksesFitur untuk Mahasiswa
    public function aksesFitur() {
        return "Mahasiswa $this->nama dapat mengakses fitur absen dan tugas";
    }
}

class Dosen extends Pengguna {
    public function __construct($nama){
        parent::__construct($nama);
    }

    // Implementasi khusus metode aksesFitur untuk Dosen
    public function aksesFitur() {
        return "Dosen $this->nama dapat mengakses fitur pengelolaan kelas dan pemberian nilai.";
    }
}

$mahasiswa = new Mahasiswa("Tiara Dinda"); // Menampilkan hasil akses fitur Mahasiswa
echo $mahasiswa->aksesFitur() . "<br>"; //Menampilkan akses fitur mahasiswa
$dosen = new Dosen("Bapak Prih Diantono Abda'u"); //Menampilkan akses fitur dosen
echo $dosen->aksesFitur(); // Menampilkan hasil akses fitur Dosen
?>
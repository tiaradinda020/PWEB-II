<?php
//membuat class pengguna
class Pengguna {
    protected $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    // Membuat class pengguna metode aksesFitur
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

//Instansiasi objek dari class Dosen dan Mahasiswa
$mahasiswa = new Mahasiswa("Tiara Dinda");
echo $mahasiswa->aksesFitur() . "<br>"; 
$dosen = new Dosen("Bapak Prih Diantono Abda'u");
echo $dosen->aksesFitur();
?>

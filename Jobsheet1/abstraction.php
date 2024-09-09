<?php
// Definisi class abstrak Pengguna
abstract class Pengguna {
    // Atribut umum
    protected $nama;

    // Constructor pada class abstrak
    public function __construct($nama) {
        $this->nama = $nama;
    }

    // Metode abstrak yang harus diimplementasikan oleh subclass
    abstract public function aksesFitur();
}

// Definisi class Mahasiswa yang mengimplementasikan class Pengguna
class Mahasiswa extends Pengguna {
    // Constructor untuk Mahasiswa
    public function __construct($nama) {
        // Memanggil constructor dari class Pengguna
        parent::__construct($nama);
    }

    // Implementasi metode aksesFitur untuk class Mahasiswa
    public function aksesFitur() {
        return "Mahasiswa $this->nama dapat mengakses fitur pendaftaran kelas dan tugas.";
    }
}

// Definisi class Dosen yang mengimplementasikan class Pengguna
class Dosen extends Pengguna {
    // Constructor untuk Dosen
    public function __construct($nama) {
        // Memanggil constructor dari class Pengguna
        parent::__construct($nama);
    }

    // Implementasi metode aksesFitur untuk class Dosen
    public function aksesFitur() {
        return "Dosen $this->nama dapat mengakses fitur manajemen kelas dan penilaian.";
    }
}

// Membuat objek dari class Mahasiswa dan Dosen
$mahasiswa = new Mahasiswa("Tiara Dinda");
$dosen = new Dosen("Bapak Abda'u");

// Menampilkan hasil panggilan metode aksesFitur untuk masing-masing objek
echo $mahasiswa->aksesFitur() . "<br>"; // Output: Mahasiswa Tiara Dinda dapat mengakses fitur pendaftaran kelas dan tugas.
echo $dosen->aksesFitur(); // Output: Dosen Dr. Ahmad Fauzi dapat mengakses fitur manajemen kelas dan penilaian.
?>

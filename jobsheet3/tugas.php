<?php
// Kelas Person sebagai induk dari Dosen dan Mahasiswa
class Person {
    protected $name;
    protected $umur;

    public function __construct($name, $umur) {
        $this->name = $name;
        $this->umur = $umur;
    }

    public function getName() {
        return $this->name;
    }

    public function getUmur() {
        return $this->age;
    }

    // Metode ini akan di-override oleh kelas turunan
    public function getRole() {
        return "Person";
    }
}

// Kelas Dosen yang mewarisi dari Person
class Dosen extends Person {
    private $nidn; // Menggunakan enkapsulasi untuk melindungi atribut

    public function __construct($name, $umur, $nidn) {
        parent::__construct($name, $umur);
        $this->nidn = $nidn;
    }

    public function getNidn() {
        return $this->nidn;
    }

    // Override metode getRole
    public function getRole() {
        return "Dosen";
    }
}

// Kelas Mahasiswa yang mewarisi dari Person
class Mahasiswa extends Person {
    private $nim; // Menggunakan enkapsulasi untuk melindungi atribut

    public function __construct($name, $umur, $nim) {
        parent::__construct($name, $umur);
        $this->nim = $nim;
    }

    public function getNim() {
        return $this->nim;
    }

    // Override metode getRole
    public function getRole() {
        return "Mahasiswa";
    }
}

// Kelas abstrak Jurnal untuk implementasi Abstraction
abstract class Jurnal {
    protected $judul;

    public function __construct($judul) {
        $this->judul = $judul;
    }

    abstract public function kelolaPengajuan();
}

// Kelas JurnalDosen yang mengimplementasikan Jurnal
class JurnalDosen extends Jurnal {
    private $nidn;

    public function __construct($judul, $nidn) {
        parent::__construct($judul);
        $this->nidn = $nidn;
    }

    public function kelolaPengajuan() {
        echo "Jurnal dengan judul '$this->judul' oleh Dosen NIDN $this->nidn telah diajukan.\n";
    }
}

// Kelas JurnalMahasiswa yang mengimplementasikan Jurnal
class JurnalMahasiswa extends Jurnal {
    private $nim;

    public function __construct($judul, $nim) {
        parent::__construct($judul);
        $this->nim = $nim;
    }

    public function kelolaPengajuan() {
        echo "Jurnal dengan judul '$this->judul' oleh Mahasiswa NIM $this->nim telah diajukan.\n";
    }
}

$dosen = new Dosen("Pak Abda'u", 35, "123456");
$mahasiswa = new Mahasiswa("Tiara", 18, "230102045");

echo $dosen->getName() . " adalah seorang " . $dosen->getRole() . " dengan NIDN: " . $dosen->getNidn() . "\n";
echo $mahasiswa->getName() . " adalah seorang " . $mahasiswa->getRole() . " dengan NIM: " . $mahasiswa->getNim() . "\n";

$jurnalDosen = new JurnalDosen("Penelitian AI", $dosen->getNidn());
$jurnalMahasiswa = new JurnalMahasiswa("Studi Kasus Machine Learning", $mahasiswa->getNim());

$jurnalDosen->kelolaPengajuan();
$jurnalMahasiswa->kelolaPengajuan();
?>
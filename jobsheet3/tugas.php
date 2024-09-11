<?php
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
        return $this->umur;
    }

    public function getRole() {
        return "Person";
    }
}

class Dosen extends Person {
    private $nidn;

    public function __construct($name, $umur, $nidn) {
        parent::__construct($name, $umur);
        $this->nidn = $nidn;
    }

    public function getNidn() {
        return $this->nidn;
    }

    public function getRole() {
        return "Dosen";
    }
}

class Mahasiswa extends Person {
    private $nim;

    public function __construct($name, $umur, $nim) {
        parent::__construct($name, $umur);
        $this->nim = $nim;
    }

    public function getNim() {
        return $this->nim;
    }

    public function getRole() {
        return "Mahasiswa";
    }
}

abstract class Jurnal {
    protected $judul;

    public function __construct($judul) {
        $this->judul = $judul;
    }

    abstract public function kelolaPengajuan();
}

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

echo $dosen->getName() . " adalah seorang " . $dosen->getRole() . " dengan NIDN: " . $dosen->getNidn() . "<br>";
echo $mahasiswa->getName() . " adalah seorang " . $mahasiswa->getRole() . " dengan NIM: " . $mahasiswa->getNim() . "<br>";

$jurnalDosen = new JurnalDosen("Penelitian AI", $dosen->getNidn());
$jurnalMahasiswa = new JurnalMahasiswa("Studi Kasus Machine Learning", $mahasiswa->getNim());

$jurnalDosen->kelolaPengajuan();
$jurnalMahasiswa->kelolaPengajuan();

?>
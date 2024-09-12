<?php
class Person {
    protected $nama;
    protected $umur;

    public function tampilkanData() {
        return $this->nama;
    }

    public function getRole() {
        return "Person";
    }

    public function setNama($nama) {
        $this->nama = $nama;
    }

    public function setUmur($umur) {
        $this->umur = $umur;
    }
}

class Dosen extends Person {
    private $nidn;

    public function tampilkanData() {
        return "Nama: $this->nama, Umur: $this->umur, NIDN: $this->nidn";
    }

    public function getRole() {
        return "Dosen";
    }

    public function setNidn($nidn) {
        $this->nidn = $nidn;
    }

    public function getNidn() {
        return $this->nidn;
    }
}

class Mahasiswa extends Person {
    private $nim;

    public function tampilkanData() {
        return "Nama: $this->nama, Umur: $this->umur, NIM: $this->nim";
    }

    public function getRole() {
        return "Mahasiswa";
    }

    public function setNim($nim) {
        $this->nim = $nim;
    }

    public function getNim() {
        return $this->nim;
    }
}

abstract class Jurnal {
    protected $judul;
    protected $penulis;

    public function setJudul($judul) {
        $this->judul = $judul;
    }

    public function setPenulis($penulis) {
        $this->penulis = $penulis;
    }

    abstract public function kelolaPengajuan();

    public function getJudul() {
        return $this->judul;
    }

    public function getPenulis() {
        return $this->penulis;
    }
}

class JurnalDosen extends Jurnal {
    private $nidn;

    public function kelolaPengajuan() {
        return "Judul: '$this->judul', NIDN: $this->nidn.<br>";
    }

    public function setNidn($nidn) {
        $this->nidn = $nidn;
    }
}

class JurnalMahasiswa extends Jurnal {
    private $nim;

    public function kelolaPengajuan() {
        return "Judul: {$this->getJudul()} <br> Nama: {$this->getPenulis()} <br> NIM: {$this->nim}<br>";
    }

    public function setNim($nim) {
        $this->nim = $nim;
    }
}

$dosen = new Dosen();
$dosen->setNama("Pak Abda'u");
$dosen->setUmur(35);
$dosen->setNidn("123456");

$mahasiswa = new Mahasiswa();
$mahasiswa->setNama("Tiara");
$mahasiswa->setUmur(18);
$mahasiswa->setNim("230102045");

echo $dosen->tampilkanData() . $dosen->getRole() . "NIDN: " . $dosen->getNidn() . "<br>";
echo $mahasiswa->tampilkanData(). $mahasiswa->getRole() . "NIM: " . $mahasiswa->getNim() . "<br>";

$jurnalDosen = new JurnalDosen();
$jurnalDosen->setJudul("Praktikum WEB");
$jurnalDosen->setPenulis($dosen->tampilkanData());
$jurnalDosen->setNidn($dosen->getNidn());

$jurnalMahasiswa = new JurnalMahasiswa();
$jurnalMahasiswa->setJudul("PBL");
$jurnalMahasiswa->setPenulis($mahasiswa->tampilkanData());
$jurnalMahasiswa->setNim($mahasiswa->getNim());

echo $jurnalDosen->kelolaPengajuan();
echo $jurnalMahasiswa->kelolaPengajuan();
?>

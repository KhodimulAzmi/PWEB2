<?php
abstract class Person
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    // Pembuatan template function untuk override
    public function getName() {}
    public function getRole() {}
    public function getID() {}
}

class Dosen extends Person
{
    private $role;
    private $nidn;
    // Menambahkan properti tambahan

    public function __construct($name, $role, $nidn)
    {
        parent::__construct($name);
        $this->role = $role;
        $this->nidn = $nidn;
    }

    // Override setiap fungsi untuk class Dosen
    public function getName()
    {
        return $this->name;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function getID()
    {
        return $this->nidn;
    }
}

class Mahasiswa extends Person
{
    private $nim;
     // Menambahkan properti tambahan

    public function __construct($name, $nim)
    {
        parent::__construct($name);
        $this->nim = $nim;
    }

    // Override setiap fungsi untuk class Dosen
    public function getName()
    {
        return $this->name;
    }

    public function getRole()
    {
        return "Mahasiswa";
    }

    public function getID()
    {
        return $this->nim;
    }
}

abstract class Jurnal
{
    protected $nama;
    // Menggunakan protected untuk diwariskan

    public function __construct($nama)
    {
        $this->nama = $nama;
    }

    // template function
    public function getMatkul() {}
    public function getNama() {}
    public function getTanggal() {}
    public function getStatus() {}
}

class JurnalMahasiswa extends Jurnal
{

    public function __construct($nama)
    {
        parent::__construct($nama);
    }

    // Override dari fungsi yang dibutuhkan
    public function getNama()
    {
        return $this->nama;
    }
}

class JurnalDosen extends Jurnal
{
    private $tanggal;
    private $matkul;
    private $status;

    public function __construct($nama, $matkul, $tanggal, $status)
    {
        parent::__construct($nama);
        $this->matkul = $matkul;
        $this->tanggal = $tanggal;
        $this->status = $status;
    }

    // Override dari method yang dibutuhkan
    public function getNama()
    {
        return $this->nama;
    }

    public function getMatkul()
    {
        return $this->matkul;
    }

    public function getTanggal()
    {
        return $this->tanggal;
    }

    public function getStatus()
    {
        return $this->status;
    }
}

class Printer
// Class untuk pemanggilan dari class lain
{
    public function print(Person $person)
    {
        // method untuk memunculkan class Person dan
        // anak kelasnya
        echo "Nama : " . $person->getName() . "<br>";
        echo "Role : " . $person->getRole() . "<br>";
        echo "ID : " . $person->getID() . "<br>";
    }

    public function ajukanjurnalD(Jurnal $jurnal)
    {
        // method untuk memunculkan class Jurnal dan
        // dengan anak kelas JurnalDosen
        echo "Data Jurnal dengan nama MatKul " . $jurnal->getMatkul() .
            " yang diampu oleh " . $jurnal->getNama() .
            " pada tanggal " . $jurnal->getTanggal() .
            " dengan status <b>" . $jurnal->getStatus() . "</b>
        berhasil di upload!!";
    }

    public function ajukanjurnalM(Jurnal $jurnal)
    {
        // method untuk memunculkan class Jurnal dan
        // dengan anak kelas JurnalMahasiswa
        echo "Data Jurnal Kelas dengan ketua kelas " . $jurnal->getNama() . " berhasil di upload!!<br>";
    }

    // Jurnal Mahasiswa dan Dosen kurang tepat untuk dilakukan secara
    // Polymorphism karena jumlah properti yang diperlukan berbeda
}

// Instansiasi Kelas ke Objek
$mahasiswa = new Mahasiswa("Shiina", "011");
$dosen = new Dosen("Yuuta", "Dosen", "113");
$jurnald = new JurnalDosen("Yuuta", "MIPA", "08 Agustus 2025", "MASUK");
$jurnalm = new JurnalMahasiswa("Reiyuu");
$print = new Printer();

$print->print($mahasiswa);
// Output ->
// Nama : Shiina
// Role : Mahasiswa
// ID : 011

echo "<br>";

$print->ajukanjurnalM($jurnalm);
// Output ->
// Data Jurnal Kelas dengan ketua kelas Reiyuu berhasil di upload!!

echo "<br>";

$print->print($dosen);
// Output ->
// Nama : Yuuta
// Role : Dosen
// ID : 113

echo "<br>";

$print->ajukanjurnalD($jurnald);
// Output ->
// Data Jurnal dengan nama MatKul MIPA yang diampu oleh Yuuta pada tanggal 08 Agustus 2025 dengan status MASUK berhasil di upload!!
?>
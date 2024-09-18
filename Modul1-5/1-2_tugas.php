<?php

// Membuat Class Dosen
class Dosen
{
    // Membuat Properti Class
    public $nama;
    public $nip;
    public $mataKuliah;

    // Membuat fungsi construct
    public function __construct($nama, $nip, $mataKuliah)
    {
        $this->nama = $nama;
        $this->nip = $nip;
        $this->mataKuliah = $mataKuliah;
    }

    // Membuat method tampilkanDosen
    public function tampilkanDosen()
    {
        return "Nama : $this->nama <br> NIP : $this->nip <br> Mata Kuliah : $this->mataKuliah";
    }
}

// Instanisasi kelas dosen
$dosen = new Dosen("Hanafuku", "1110567", "OOP");
echo $dosen->tampilkanDosen();
// Output :
// Nama : Hanafuku
// NIP : 1110567
// Mata Kuliah : OOP
?>
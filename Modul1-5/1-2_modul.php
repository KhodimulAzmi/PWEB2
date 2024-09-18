<?php
// Definisi Kelas
class Mobil
{
    // Atribut dan Properti untuk menjelaskan struktur/data dari class
    public $merk;
    public $warna;

    // Constructor, untuk memberikan nilai awal di dalam atribut class
    public function __construct($merk, $warna)
    {
        $this->merk = $merk;
        $this->warna = $warna;
    }

    // Metode atau Function, Proses/Habit dari class
    public function deskripsi()
    {
        return "Mobil ini adalah $this->merk berwarna $this->warna";
    }
}

// Instansiasi Objek
$mobil = new Mobil("Toyota", "Hitam");
echo $mobil->deskripsi();


// Definisi Kelas
class Buku
{
    // Atribut dan Properti untuk menjelaskan struktur/data dari class
    public $judul;
    public $penulis;

    // Constructor, untuk memberikan nilai awal di dalam atribut class
    public function __construct($judul, $penulis)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
    }

    // Metode atau Function, Proses/Habit dari class
    public function tampilkanInfo()
    {
        return "Buku: $this->judul berwarna $this->penulis";
    }
}

// Instansiasi Objek
$buku1 = new Buku("Pemograman PHP", "John Doe");
// Output -> Mobil ini adalah Toyota berwarna Hitam

echo "<br>";

echo $buku1->tampilkanInfo();
// Output -> Buku: Pemograman PHP berwarna John Doe
?>
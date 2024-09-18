<?php
// Definisi Class
class Buku1
{
    // Atribut atau Properties
    public $judul;
    public $penulis;
    // Constructor
    public function __construct($judul, $penulis)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
    }
    // Metode atau Function
    public function tampilkanInfo()
    {
        return "Judul: $this->judul, Penulis: $this->penulis";
    }
}
// Instansiasi Objek
$buku1 = new Buku1("Pemrograman PHP", "Andi Prasetyo");
echo $buku1->tampilkanInfo() . "<br>";

// Encapsulation : Pembungkusan detail implementasi dan memberikan 
// pembatasan akses terhadap suatu class atau function

class Buku2
{
    private $judul;
    private $penulis; //Masih belum paham soal penggunaan ini:>

    public function __construct($judul, $penulis)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
    }

    public function getPenulis()
    {
        return $this->penulis;
    }

    public function setJudul($judul)
    {
        $this->judul = $judul;
    }
}

// Instansiasi Kelas ke Objek
$buku2 = new Buku2("Pemrograman PHP", "Andi Prasetyo");
echo $buku2->getPenulis() . "<br>"; // Output: Pemrograman PHP

// Inheritance : suatu kelas dapat mewarisi atribut dan fungsi kelas lain
class Produk
{
    protected $nama;

    public function __construct($nama)
    {
        $this->nama = $nama;
    }

    public function getNama()
    {
        return $this->nama;
    }
}

class Buku3 extends Produk
{
    private $penulis;

    public function __construct($nama, $penulis)
    {
        parent::__construct($nama);
        $this->penulis = $penulis;
    }

    public function getPenulis()
    {
        return $this->penulis;
    }
}

$buku3 = new Buku3("Pemrograman PHP", "Andi Prasetyo");
echo $buku3->getNama() . "<br>";

// Output :
// Judul: Pemrograman PHP, Penulis: Andi Prasetyo
// Andi Prasetyo
// Pemrograman PHP
?>
<?php

// Membuat Kelas Mahasiswa
class Mahasiswa
{
    // Membuat atribut di untuk kelas mahasiswa
    public $nama;
    public $nim;
    public $jurusan;

    // Membuat Constructor untuk nilai awal
    public function __construct($nama, $nim, $jurusan)
    {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // Membuat function/method di dalam kelas mahasiswa
    public function tampilkanData()
    {
        return "Nama : $this->nama, NIM : $this->nim, Jurusan : $this->jurusan <br>";
    }

    // Membuat method tambahan 
    public function updateJurusan($newjurusan)
    {
        $this->jurusan = $newjurusan;
        return $newjurusan;
    }

    // Membuat method tambahan 
    public function setter($newnim)
    {
        $this->nim = $newnim;
        return $newnim;
    }
}

// Instansiasi objek dari kelas mahasiswa
$mahasiswa = new Mahasiswa("Shiina", "20208875", "TI");
echo $mahasiswa->tampilkanData();
 //Output -> Nama : Shiina, NIM : 20208875, Jurusan : TI

// Mengganti value jurusan
$mahasiswa->updateJurusan("TE");
echo $mahasiswa->tampilkanData();
//Output -> Nama : Shiina, NIM : 20208875, Jurusan : TE

// Mengganti value nim
$mahasiswa->setter("20201111");
echo $mahasiswa->tampilkanData();
// Output -> Nama : Shiina, NIM : 20201111, Jurusan : TI
?>
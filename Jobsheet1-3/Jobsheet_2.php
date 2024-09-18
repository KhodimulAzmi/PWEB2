<?php

// Membuat Class Mahasiswa
class Mahasiswa0
{
    // Membuat properti dari Mahasiswa
    public $nama;
    public $nim;
    public $jurusan;

    // Construct untuk memberi nilai awal
    public function __construct($nama, $nim, $jurusan)
    {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // Template Penampilan Data
    public function tampilkanData()
    {
        return "Namaku $this->nama, dengan nim : $this->nim, aku dari jurusan $this->jurusan";
    }
}

// Encapsulation
class Mahasiswa
{
    private $nama; //Mengubah properti menjadi private
    private $nim;
    private $jurusan;

    public function __construct($nama, $nim, $jurusan)
    {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    public function tampilkanData()
    {
        return "Namaku $this->nama, dengan nim : $this->nim, aku dari jurusan $this->jurusan";
    }
    //Sampai sini, struktur masih sama dengan Mahasiswa0, untuk alasan kenapa saya membuat 2
    // silahkan untuk membaca README pada bagian bawah file ini :D

    // Fungsi Getter untuk menangkap dan mengembalikan nilai-nilai yang ada
    public function getter()
    {
        return $this->nama;
        return $this->nim;
        return $this->jurusan;
    }

    // Fungsi Setter untuk mengubah nilai apabila diperlukan
    public function setter($nama, $nim, $jurusan)
    {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
}

// Inheritance
class Pengguna
{
    protected $nama;
    //Penggunaan protected lebih sesuai karena properti akan
    // digunakan kembali di dalam kelas turunan (child)

    public function __construct($nama)
    {
        $this->nama = $nama;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function aksesFitur() {}

    // Fungsi pada Class ini boleh tidak terlalu detail
    // Karena akan ditulis ulang (Override) pada Class Child
}

class Dosen extends Pengguna
// Extend menandakan suatu class merupakan 
// kelas turunan dari kelas lain
{
    private $mataKuliah;
    // Private dapat digunakan karena tidak akan digunakan
    // selain pada class ini

    public function __construct($nama, $mataKuliah)
    {
        parent::__construct($nama);
        // properti nama dapat diambil dari class parent
        $this->mataKuliah = $mataKuliah;
    }

    // Fungsi untuk menampilkan data
    public function tampilkanData()
    {
        return "Aku $this->nama, Seorang dosen $this->mataKuliah";
    }

    // Fungsi untuk memberikan nilai pada fungsi akses fitur
    // Pada Class Pengguna, namun apabila diakses dari Class Dosen
    public function aksesFitur()
    {
        return "Kelola Jadwal Matkul";
    }
}

class Mahasiswa2 extends Pengguna
{

    public function __construct($nama)
    {
        parent::__construct($nama);
        // properti nama dapat diambil dari class parent
    }

    // Fungsi untuk memberikan nilai pada fungsi akses fitur
    // Pada Class Pengguna, namun apabila diakses dari Class Mahasiswa
    public function aksesFitur()
    {
        return "Lihat Jadwal Matkul";
    }
}

// Polymorphism
class Poly
{
    // Membuat satu fungsi yang akan digunakan, tetapi akan berbeda output karena perbedaan parameter
    public function print(Pengguna $nama)
    {
        echo $nama->getNama() . " mempunyai akses ke " . $nama->aksesFitur() . "<br>";
    }
}

// Abstraction
abstract class Pengguna3
{
    // Class yang dapat digunakan sebagai Class "Template"
    // dan akan sangat berguna apabila akan digunakan berualang kali
    abstract public function aksesFitur();
}

class Dosen3 extends Pengguna3
{
    public function aksesFitur()
    {
        // Memodifikasi kelas Template
        return "Hi! Aku Dosen!!";
    }
}

class Mahasiswa3 extends Pengguna3
{
    public function aksesFitur()
    {
        // Memodifikasi kelas Template
        return "Hi! Aku Mahasiswa!!";
    }
}

echo "// Output pembuatan Class dan Object<br>";
// Instansiasi Kelas ke Objek
$mahasiswa0 = new Mahasiswa0("Yuuki", "2229376", "Ekonomi");
echo $mahasiswa0->tampilkanData() . "<br>";
// Output : Namaku Yuuki, dengan nim : 2229376, aku dari jurusan Ekonomi

echo "<br>// Output Encapsulation<br>";
// Instansiasi Kelas ke Objek
$mahasiswa = new Mahasiswa("Kaito", "1122345", "Komputer");
echo $mahasiswa->tampilkanData() . "<br>";
// Output : Namaku Kaito, dengan nim : 1122345, aku dari jurusan Komputer

echo "<br>// Output Inheritance<br>";
// Instansiasi Kelas ke Objek
$dosen = new Dosen("Seiya", "Astronomi");
echo $dosen->tampilkanData() . "<br>";
// Output : Aku Seiya, Seorang dosen Astronomi

echo "<br>// Output Polymorphism<br>";
// Instansiasi Kelas ke Objek
$mahasiswa2 = new Mahasiswa2("Sayuu");
$dosen2 = new Dosen("Seiya", "Astronomi");
$poly = new Poly();
$poly->print($mahasiswa2);
$poly->print($dosen2);
// Output :
// Sayuu mempunyai akses ke Lihat Jadwal Matkul
// Seiya mempunyai akses ke Kelola Jadwal Matkul

echo "<br>// Output Abstraction<br>";
// Instansiasi Kelas ke Objek
$mahasiswa3 = new Mahasiswa3();
$dosen3 = new Dosen3();
echo $dosen3->aksesFitur() . "<br>";
echo $mahasiswa3->aksesFitur() . "<br>";
// Output :
// Hi! Aku Dosen!!
// Hi! Aku Mahasiswa!!


// README : Kenapa saya membuat Class Mahasiswa0 dan Mahasiswa?
// Itu karena pada soal terdapat permintaan untuk mengubah aksesbilitas (enkapsulasi)
// Jadi saya sediakan kedua recordnya
// Mahasiswa0 untuk sebelum enkapsulasi
// Mahasiswa untuk setelah enkapsulasi
?>
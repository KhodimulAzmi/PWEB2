<i><h1>PEMOGRAMAN WEB II</h1></i>
<h2>Object Oriented Programming</h2>
<p>
<b>Pemrograman Berorientasi Objek (OOP)</b> adalah paradigma pemrograman yang menggunakan "objek" untuk merancang aplikasi dan program.
Konsep utamanya mencakup objek yang merupakan entitas dengan atribut (data) dan metode (fungsi) yang beroperasi pada data tersebut.
Kelas berfungsi sebagai cetak biru untuk membuat objek, mendefinisikan atribut dan metode yang dimiliki objek.
</p>
<p>
OOP memiliki beberapa kelebihan dibandingkan metode lainnya, antara lain dengan pengelompokan struktur kode yang 
berorientasi pada objek, akan memungkinkan pengembang untuk melakukan pemeliharaan kode dan <i>maintainance</i> dengan waktu yang lebih singkat.
OOP juga meningkatkan kolaborasi antar tim, karena modul-modul yang terpisah dapat dikerjakan secara paralel tanpa saling mengganggu.
Fleksibilitas dalam pengembangan juga menjadi kelebihan, karena perubahan dalam satu bagian sistem dapat dilakukan tanpa memengaruhi bagian lain.
</p>

<br>

<h2>Class</h2>

```php
<?php
class Contoh
{

}
?>
``` 

<p>
  Pada kode diatas, itu adalah pembentukan dari Class, Class adalah cetak biru yang nantinya akan kita jadikan objek.
  Class mendefinisikan properti (data) dan metode (fungsi) yang dimiliki oleh objek yang dibuat dari class tersebut.
</p>

<h2>Property dan Method</h2>

```php
<?php
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
?>
```
<p>
  Pada kode diatas merupakan Class yang sudah lengkap dengan properti dan metodenya. Properti merupakan <b>ciri-ciri</b>
  dari sebuah kelas, pada kelas mobil di atas, properti yang dimiliki dapat berupa merek mobil atau warna dari mobil tersebut.
  Sedangkan metode, ibarat seperti <b>kemampuan</b> yang dimiliki oleh sebuah kelas, fungsi dapat berupa apa saja, seperti yang
  ada pada kode di atas yakni fungsi constructor dan deskripsi dari kelas Mobil.
</p>
<br>

<h2>Object</h2>

```php
<?php

$mobil = new Mobil("suzuki", "Merah");

?>
```
<p>
Objek adalah entitas konkret yang dibuat dari kelas dalam Pemrograman Berorientasi Objek (OOP).
 Objek memiliki atribut (data) dan metode (fungsi) yang mendefinisikan perilakunya.
 Setiap objek dapat berisi nilai unik untuk atributnya, dan berfungsi sebagai instansiasi dari kelas yang mendefinisikannya.
  Instansiasi object dapat ditandai dengan adanya <b>new</b>.
</p>
<h2>Prinsip OOP</h2>
<p>
OOP memiliki 4 prinsip yang akan digunakan di dalamnya, yaitu :
</p>
<ul>
  <h3>ENCAPSULATION</h3>

  ```php
    public $nama;
    private $nip;
    protected $mataKuliah;
  ```
  <p>
    <b>Enkapsulasi</b> yang berarti "pembungkusan" dimana kode yang kita buat akan dibatasi dalam aspek akses untuk berkaitan dengan satu sama lain,
    akses yang dimaksud ialah bagaimana dan dimana kode tersebut dapat digunakan. Dengan enkapsulasi,
    data dan metode yang berkaitan dengan objek digabungkan menjadi satu kesatuan,
    sehingga mengurangi kemungkinan akses tidak sah dan manipulasi data secara langsung.
  </p>
  <p>
    Berikut aksesbilitas dan sifatnya :
    <ul>
      <li>Public : Bisa diakses oleh method, kelas lain secara bebas, bahkan juga bisa dari file yang berbeda</li>
      <li>Private : Hanya bisa diakses oleh method yang ada di kelas tersebut, dan tidak akan bisa diakses oleh apapun yang ada di luar kelas</li>
      <li>Protected : Hanya Bisa diakses oleh kelas itu sendiri dan kelas turunannya (child class)</li>
    </ul>
  </p>
  
  <h3>INHERITANCE</h3>

  ```php
<?php
// Inheritance
class Animal
{
    protected $name;
    // Protected digunakan karena sifat aksesnya yang 
    // cocok untuk inheritance (pewarisan)

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function makeSound() {}
}

class Dog extends Animal
{
    public function makeSound()
    {
        // Override function MakeSound 
        return "Woof!!";
    }
}
?>
  ```
  <p>
<b>Inheritance</b>, atau pewarisan, adalah konsep dalam Pemrograman Berorientasi Objek (OOP) di mana sebuah kelas baru (kelas turunan atau subclass) dapat mewarisi atribut dan metode dari kelas yang sudah ada (kelas induk atau superclass).
Ini memungkinkan pengembang untuk menggunakan kembali kode dan memperluas fungsionalitas tanpa harus menulis ulang.
Dengan pewarisan, subclass akan dapat menambahkan atau mengubah perilaku yang diwarisi (override).
  </p>

<h3>POLYMORPHISM</h3>

```php
<?php
// Inheritance
class Animal
{
    protected $name;
    // Protected digunakan karena sifat aksesnya yang 
    // cocok untuk inheritance (pewarisan)

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function makeSound() {}
}

class Dog extends Animal
{
    public function makeSound()
    {
        // Override function MakeSound 
        return "Woof!!";
    }
}

class Cat extends Animal
{
    public function makeSound()
    {
        // Override function MakeSound 
        return "Meow!";
    }
}

$dog = new Dog("Buddy");
echo $dog->getName() . " says " . $dog->makeSound()."<br>";
// Output : Buddy says Woof!!

// Polymorphism
class Printer
// Class untuk pemanggilan dari class lain
{
    public function print(Animal $animal)
    {
        echo $animal->getName() . " says " . $animal->makeSound() . "<br>";
    }
}

// Instansiasi Kelas ke Objek
$dog = new Dog("Buddy");
$cat = new Cat("Kitty");

$printer = new Printer();
$printer->print($dog);
// Output : Buddy says Woof!!
$printer->print($cat);
// Output : Kitty says Meow!
?>
```

<p>
  <b>Polimorfisme</b> adalah konsep dalam Pemrograman Berorientasi Objek (OOP) yang memungkinkan objek berbeda untuk diakses melalui antarmuka yang sama.
  Ini berarti bahwa satu metode dapat berfungsi dengan cara yang berbeda tergantung pada objek yang memanggilnya.
  Polimorfisme biasanya diimplementasikan melalui metode overriding.
</p>

<h3>ABSTRACTION</h3>

```php
<?php
//Abstraksi 
abstract class Shape
{
    // Pembuatan template function
    abstract public function area();
}
class Rectangle extends Shape
{
    private $width;
    private $height;
    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    // Override function area
    public function area()
    {
        return $this->width * $this->height;
    }
}
class Circle extends Shape
{
    private $radius;
    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    // Override function area
    public function area()
    {
        return pi() * pow($this->radius, 2);
    }
}
$rectangle = new Rectangle(5, 10);
echo "Area of Rectangle: " . $rectangle->area() . "<br>"; // Output: Area of Rectangle: 50
$circle = new Circle(7);
echo "Area of Circle: " . $circle->area() . "<br>"; // Output: Area of Circle: 153.9380400259
?>
```

<p>
  <b>Abstraksi</b> adalah konsep dalam Pemrograman Berorientasi Objek (OOP) yang menyederhanakan kompleksitas dengan menyembunyikan detail implementasi dan hanya menampilkan fitur yang relevan kepada pengguna.
  Dengan abstraksi, pengembang dapat fokus pada interaksi dengan objek tanpa perlu memahami bagaimana objek tersebut bekerja secara internal. Dalam artian lain,
  abstract juga dapat digunakan sebagai template program untuk digunakan berulang kali.
</p>
</ul>

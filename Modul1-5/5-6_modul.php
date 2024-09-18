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

// Enkapsulasi
class BankAccount
{
    private $balance;
    //Dapat menggunakan aksesbilitas private
    // karena memang hanya dibutuhkan untuk class ini 

    public function __construct($balance)
    {
        $this->balance = $balance;
    }

    public function deposit($amount)
    {
        if ($amount > 0) {
            $this->balance += $amount;
        }
    }
    public function withdraw($amount)
    {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
        }
    }
    public function getBalance()
    {
        return $this->balance;
    }
}
$account = new BankAccount(1000);
$account->deposit(500);
$account->withdraw(200);
echo "Current Balance: " . $account->getBalance() . "<br>";
// Output : Current Balance: 1300

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
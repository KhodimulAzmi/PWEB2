<?php

// Inheritance
class Person
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}

// Encapsulation
class Student extends Person
{
    private $studentID;
    private $nama;

    public function __construct($nama, $studentID)
    {
        $this->studentID = $studentID;
        $this->nama = $nama;
    }

    public function getName()
    {
        return "Namaku : " . $this->nama;
    }

    public function getStudentID()
    {
        return $this->studentID;
    }

    public function StuNameSet($nama)
    {
        $this->nama = $nama;
    }

    public function StuIDSet($studentID)
    {
        $this->studentID = $studentID;
    }
}

// Polymorphism
class Teacher extends Person
{
    private $teacherID;

    public function __construct($nama, $teacherID)
    {
        $this->teacherID = $teacherID;
        parent::__construct($nama);
    }

    public function getTeacherID()
    {
        return $this->teacherID;
    }
}

// Abstraction
abstract class Course
{
    public function getCourseDetails()
    {
        return "This Class is : ";
    }

    public function courseStatus() {}
}

class OnlineCourse extends Course
{
    public function courseStatus()
    {
        return "ONLINE";
    }
}

class OfflineCourse extends Course
{
    public function courseStatus()
    {
        return "OFFLINE";
    }
}

class Poly
// Class untuk pemanggilan dari class lain
{
    public function print(Person $person)
    {
        echo $person->getName() . "<br>";
    }

    public function coursestat(Course $course)
    {
        echo $course->getCourseDetails() . $course->courseStatus() . "<br>";
    }
}

// Instansiasi Kelas ke Objek
$student = new Student("Ray", "1102265");
$teacher = new Teacher("Yuu", "2220165");
$poly = new Poly();

$poly->print($student);
// Output -> Namaku : Ray

echo $student->getStudentID() . "<br>";
// Output -> 1102265

$student->StuIDSet("01");
echo $student->getStudentID() . "<br>";
// Output -> 01

$offline = new OfflineCourse();
$online = new OnlineCourse();

$poly->coursestat($offline);
// Output -> This Class is : OFFLINE

$poly->coursestat($online);
// Output -> This Class is : ONLINE
?>
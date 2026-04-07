<?php
/*
 * ÉNONCÉ :
 * La classe Person existe déjà avec firstName et lastName.
 * 1. Créez une classe Student qui hérite de Person et ajoute les propriétés protected $studentNumber, $school, $class.
 * 2. Ajoutez les getters/setters pour ces propriétés et une méthode displayStudent() qui affiche toutes les infos.
 * 3. Instanciez un Student et affichez ses informations.
 */

class Person
{
    

    public function __construct(protected string $firstName, protected string $lastName, protected int $age)
    {

    }
    public function getFirstName(): string { return $this->firstName; }
    public function setFirstName(string $firstName): void { $this->firstName = $firstName; }
    public function getLastName(): string { return $this->lastName; }
    public function setLastName(string $lastName): void { $this->lastName = $lastName; }
    public function getAge(): int { return $this->age; }
    public function setAge(int $age): void { $this->age = $age; }
}

$person = new Person("Alice", "Martin", 30);
echo $person->getFirstName() . " " . $person->getLastName() . "<br>";

class Student extends Person
{
    public function __construct(
        string $firstName,
        string $lastName,
        int $age,
        protected string $studentNumber,
        protected string $school,
        protected string $class
    ) {
        parent::__construct($firstName, $lastName, $age);
    }

    public function getStudentNumber(): string { return $this->studentNumber; }
    public function setStudentNumber(string $studentNumber): void { $this->studentNumber = $studentNumber; }
    public function getSchool(): string { return $this->school; }
    public function setSchool(string $school): void { $this->school = $school; }
    public function getClass(): string { return $this->class; }
    public function setClass(string $class): void { $this->class = $class; }

    public function displayStudent() {
        echo "First Name: " . $this->getFirstName() . "<br>";
        echo "Last Name: " . $this->getLastName() . "<br>";
        echo "Age: " . $this->getAge() . "<br>";
        echo "Student Number: " . $this->studentNumber . "<br>";
        echo "School: " . $this->school . "<br>";
        echo "Class: " . $this->class . "<br>";
    }
}

$student = new Student("Bob", "Smith", 20, "S12345", "High School", "10th Grade");
$student->displayStudent();


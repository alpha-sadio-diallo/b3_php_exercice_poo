<?php
/*
 * ÉNONCÉ :
 * Créez une classe Contact avec les propriétés protected name, email et phone.
 * Ajoutez les getters/setters et une méthode displayContact() qui affiche les infos du contact.
 * Instanciez un contact et affichez ses informations.
*/

class Contact {
    protected $name;
    protected $email;
    protected $phone;

    public function __construct(string $name, string $email, string $phone) {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
    }

    // Getters
    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPhone() {
        return $this->phone;
    }

    // Setters
    public function setName(string $name) {
        $this->name = $name;
    }

    public function setEmail(string $email) {
        $this->email = $email;
    }

    public function setPhone(string $phone) {
        $this->phone = $phone;
    }

    public function displayContact() {
        echo "Name: " . $this->name . "<br>";
        echo "Email: " . $this->email . "<br>";
        echo "Phone: " . $this->phone . "<br>";
    }
}

$contact = new Contact("John Doe", "johndoe@example.com", "123-456-7890");
$contact->displayContact();
<?php
/*
 * ÉNONCÉ :
 * Un enum est déjà présent, il faudra l'utiliser pour la propriété status de la classe Task.
 * Créez une classe Task avec les propriétés protected title, description et status (par défaut TODO).
 * Ajoutez une méthode markAsDone() qui change le status en DONE.
 * Ajoutez une méthode display() qui affiche les infos de la tâche.
 * Instanciez une tâche, affichez ses infos, puis marquez-la comme terminée et affichez à nouveau.
 * Note : Pour afficher le status, utilisez $this->status->value pour obtenir la valeur de l'enum.
*/

// Enum des status possibles
enum TaskStatus: string
{
    case TODO = "à faire";
    case DONE = "terminée";
}

class Task {
    protected $title;
    protected $description;
    protected $status;

    public function __construct(string $title, string $description) {
        $this->title = $title;
        $this->description = $description;
        $this->status = TaskStatus::TODO; // Par défaut, la tâche est à faire
    }

    public function markAsDone() {
        $this->status = TaskStatus::DONE; // Change le status en terminée
    }

    public function display() {
        echo "Title: " . $this->title . "<br>";
        echo "Description: " . $this->description . "<br>";
        echo "Status: " . $this->status->value . "<br>"; // Affiche la valeur de l'enum
    }
}       

$task = new Task("Faire les courses", "Acheter du lait, du pain et des œufs.");
$task->display(); // Affiche les infos de la tâche      
$task->markAsDone(); // Marque la tâche comme terminée
echo "<br>Après avoir marqué comme terminée :<br>";
$task->display(); // Affiche à nouveau les infos de la tâche avec le nouveau status



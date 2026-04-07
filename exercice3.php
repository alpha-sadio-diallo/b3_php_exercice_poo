
<?php
/*
 * ÉNONCÉ :
 * Créez une classe BlogPost avec les propriétés protected title, content, createdAt (de type DateTime).
 * Ajoutez les getters/setters 
 * Ajouter une méthode getExcerpt($length) qui retourne un extrait du contenu.
 * Instanciez un article, affichez son titre, sa date de création et un extrait de 50 caractères.
*/

class BlogPost {
    protected $title;
    protected $content;
    protected $createdAt;

    public function __construct(string $title, string $content, DateTime $createdAt) {
        $this->title = $title;
        $this->content = $content;
        $this->createdAt = $createdAt;
    }

    // Getters
    public function getTitle() {
        return $this->title;
    }

    public function getContent() {
        return $this->content;
    }

    public function getCreatedAt() {
        return $this->createdAt;
    }

    // Setters
    public function setTitle(string $title) {
        $this->title = $title;
    }

    public function setContent(string $content) {
        $this->content = $content;
    }

    public function setCreatedAt(DateTime $createdAt) {
        $this->createdAt = $createdAt;
    }

    public function getExcerpt(int $length) {
        return substr($this->content, 0, $length);
    }
}

$blogPost = new BlogPost(
    "My First Blog Post",
    "La douleur elle-même est importante à suivre, l’élite de la conception. Mais il arrive que, dans le temps, le travail et la douleur soient de grande importance.",
    new DateTime()
);  
echo "Title: " . $blogPost->getTitle() . "<br>";
echo "Created At: " . $blogPost->getCreatedAt()->format('Y-m-d H:i:s') . "<br>";
echo "Excerpt: " . $blogPost->getExcerpt(50) . "...<br>";   


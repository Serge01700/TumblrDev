<?php
class Publication {

    // Properties
    private $id_publication;
    private $title;
    private $article;
    
    // Constructor
    public function __construct(array $datas) {
        $this->hydrate($datas);
    }

    public function hydrate(array $datas) {
        foreach ($datas as $key => $value) {
            $method = 'set'.ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }


    // Methods "Getters"
    public function getId_publication() {
        return $this->id_publication;
    }
    public function getTitle() {
        return $this->title;
    }
    public function getArticle() {
        return $this->article;
    }
    

    // Methods "Setters"
    public function setId_publication(int $id_publication) {
        $this->id_publication = $id_publication;
    }
    public function setTitle(string $title) {
        $this->title = $title;
    }
    public function setArticle(string $article) {
        $this->article = $article;
    }
    
}
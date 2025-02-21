<?php
class Publication {

    // Properties
    private $id_publication;
    private $user;
    private $category;
    private $type;
    private $title;
    private $article;
    private $video;
    private $pdf;
    private $publication_date;
    private $validation;

    
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
    public function getUser() {
        return $this->user;
    }
    public function getCategory() {
        return $this->category;
    }
    public function getType() {
        return $this->type;
    }
    public function getTitle() {
        return $this->title;
    }
    public function getArticle() {
        return $this->article;
    }
    public function getVideo() {
        return $this->video;
    }
    public function getPdf() {
        return $this->pdf;
    }
    public function getPublication_date() {
        return $this->publication_date;
    }
    public function getValidation() {
        return $this->validation;
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
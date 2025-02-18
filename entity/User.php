<?php
class User {

    // Properties
    private $id_user;
    private $name;
    private $pseudo;
    private $email;
    private $password;
    private $role;
    private $nl_follower;
    private $pb_follower;
    private $creation_date;
    private $last_connection;
    private $level;                 // cette donnée provient de la table "role", et non de la table "user"

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
    public function getId_user() {
     return $this->id_user;
    }
    public function getName() {
     return $this->name;
    }
    public function getPseudo() {
     return $this->pseudo;
    }
    public function getEmail() {
     return $this->email;
    }
    public function getPassword() {
        return $this->password;
       }
    public function getRole() {
     return $this->role;
    }
    public function getNl_follower() {
     return $this->nl_follower;
    }
    public function getPb_follower() {
     return $this->pb_follower;
    }
    public function getCreation_date() {
     return $this->creation_date;
    }
    public function getLast_connection() {
     return $this->last_connection;
    }
    public function getLevel() {
     return $this->level;
    }

    
    // Methods "Setters"
    public function setId_user(int $id_user) {
        $this->id_user = $id_user;
    }
    public function setName(string $name) {
        $this->name = $name;
    }
    public function setPseudo(string $pseudo) {
        $this->pseudo = $pseudo;
    }
    public function setEmail(string $email) {
        $this->email = $email;
    }
    public function setPassword(string $password) {
        $this->password = $password;
    }
    public function setRole(int $role) {
        $this->role = $role;
    }
    public function setNl_follower(bool $nl_follower) {
        $this->nl_follower = $nl_follower;
    }
    public function setPb_follower(bool $pb_follower) {
        $this->pb_follower = $pb_follower;
    }
    public function setCreation_date(string $creation_date) {
        if (is_string($creation_date)) {
            $creation_date = new DateTime($creation_date);
        } 
        $this->creation_date = $creation_date;
    }
    public function setLast_connection(string $last_connection) {
        if (is_string($last_connection)) {
            $last_connection = new DateTime($last_connection);
        }
        $this->last_connection = $last_connection;
    }
    public function setLevel(string $level) {
        $this->level = $level;
    }

}
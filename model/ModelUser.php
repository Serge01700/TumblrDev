<?php

class ModelUser extends Model{  

    public function getUserById(int $id){

        $req = $this->getDb()->prepare('SELECT  id_user , name, pseudo, email, role, nl_follower, pb_follower, creation_date, last_connection, level 
                                        FROM  user, role 
                                        WHERE id_user=:id
                                        AND   role=id_role;');
        $req->bindParam(':id', $id, PDO::PARAM_INT);
        $req->execute();

        $data = $req->fetch(PDO::FETCH_ASSOC);
        
        return new User($data);
        
        // possibilité d'écrire en une seule ligne : 
        // return new User($req->fetch(PDO::FETCH_ASSOC));

    }

    public function getUserByEmail(string $email){
        $user = $this->getDb()->prepare('SELECT  id_user , name, pseudo, email, password, role, nl_follower, pb_follower, creation_date, last_connection 
                                        FROM  user, role 
                                        WHERE email=:email
                                        AND   role=id_role;');
        $user->bindParam(':email', $email, PDO::PARAM_STR);
        $user->execute();

        $data = $user->fetch(PDO::FETCH_ASSOC);
        return $data ? new User($data) : null;

    }

    public function isConnected(){
        if($_SESSION){
            // On peut supprimer le dossier racine "leboncoin" dans l'URL, car on a créé un virtual host sur WampServer
            // header('Location: /leboncoin');
            header('Location: /tumblrdev');
            exit();
        }
    }


    public function createUser($name, $pseudo, $email, $password, $role, $nl_follower, $pb_follower){
        $req = $this->getDb()->prepare('INSERT INTO user (name, pseudo, email, password, role, nl_follower, pb_follower, creation_date, last_connection) VALUES (:name, :pseudo, :email, :password, :role, :nl_follower, :pb_follower, NOW(), NOW());');

        $req->bindParam(':name', $name, PDO::PARAM_STR);
        $req->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
        $req->bindParam(':email', $email, PDO::PARAM_STR);
        $req->bindParam(':password', $password, PDO::PARAM_STR);
        $req->bindParam(':role', $role, PDO::PARAM_INT);
        $req->bindParam(':nl_follower', $nl_follower, PDO::PARAM_INT);
        $req->bindParam(':pb_follower', $pb_follower, PDO::PARAM_INT);

        $req->execute();
    }

}


 
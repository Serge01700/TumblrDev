<?php
class ControllerUser {

    // Inscription d'un nouvel utilisateur de type "lecteur".
    // Contrôle de la validité des données saisies dans le formulaire d'inscription.
    // Si les données sont valides : 
    //    - on crée un nouvel utilisateur (via la méthode "createUser" du modèle "ModelUser")
    //    - on récupère les données de cet utilisateur (via la méthode "getUserByEmail" du modèle "ModelUser")
    //    - on connecte l'utilisateur en initialisant les variables de session
    //    - puis on le redirige vers la page d'accueil
    
    public function signup() {

        global $router;

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['pwd'])){
                
                // Définir l'expression régulière pour le mot de passe
                $passwordPattern = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$/';

                // Vérifier si le mot de passe respecte les critères
                if (preg_match($passwordPattern, $_POST['pwd'])) {

                $model = new ModelUser();
                $user = $model->getUserByEmail($_POST['email']);
                    if(!$user){
                        $password= password_hash($_POST['pwd'], PASSWORD_DEFAULT);
                        $model = new ModelUser();
                        $model->createUser($_POST['name'], $_POST['email'], $password);

                        $model = new ModelUser();
                        $user = $model->getUserByEmail($_POST['email']);
                    
                        $_SESSION['id'] = $user->getId();
                        $_SESSION['name'] = $user->getName();
                        header('Location: /tumblrdev/');
                        exit();
                    } else {
                        $error = "Email déjà utilisé";
                        require_once('./view/form-signup.php');
                    }
                } else {
                    $error = "Le mot de passe doit contenir au moins 8 caractères, une lettre majuscule, une lettre minuscule, un chiffre, et un caractère spécial.";
                    require_once('./view/form-signup.php');
                }
            } else {
                $error = "Tous les champs doivent être remplis";
                require_once('./view/form-signup.php');
            }
        } else {
            require_once('./view/form-signup.php');
        }
    }



    // Connexion d'un utilisateur.

    public function login() {
        $model = new ModelUser();
        $model->isConnected();
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            if(!empty($_POST['email']) && !empty($_POST['pwd'])){
                $model = new ModelUser();
                $user = $model->getUserByEmail($_POST['email']);
                if($user && password_verify($_POST['pwd'], $user->getPassword())){
                    $_SESSION['id'] = $user->getId();
                    $_SESSION['name'] = $user->getName();
                    header('Location: /');
                } else {
                    $error = "Email/pasword incorrect";
                    require_once('./view/login.php');
                }
            } else {
                $error = "Tous les champs doivent être remplis";
                require_once('./view/login.php');
            }
        } else {
            require_once('./view/login.php');
        } 
    }

    // Déconnexion d'un utilisateur.

    public function logout() {
        // header('Location: /leboncoin');
        session_unset();
        session_destroy();
        header('Location: /');
        exit();
    }
    
    

    // On récupère les données d'un utilisateur via son id, 
    // puis on les affiche dans la vue "detailuser.php".
    public function userbyid($id) {

        global $router;

        $model = new ModelUser();   
        $info_user = $model->getUserById($id);
        
        require_once('./view/detailuser.php');
    }


}





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

        $name1 = $email = $pseudo = $password = $repassword ="" ; 

        global $router;
        
        if($_SERVER['REQUEST_METHOD'] === 'POST'){

            $name1 = $_POST['name1'];
            $email = $_POST['email'];
            $pseudo = $_POST['pseudo'];
            $password = $_POST['password'];
            $repassword = $_POST['repassword'];


            if(!empty($_POST['name1']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['repassword']) && !empty($_POST['pseudo'])){
                
            if(($_POST['password']) == ($_POST['repassword'])){

                // Définir l'expression régulière pour le mot de passe
                $passwordPattern = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$/';

                // Vérifier si le mot de passe respecte les critères
                if (preg_match($passwordPattern, $_POST['password'])) {

                $model = new ModelUser();
                $user = $model->getUserByEmail($_POST['email']);
                    if(!$user){
                        $password= password_hash($_POST['password'], PASSWORD_DEFAULT);
                        $role=1;

                        if($_POST['nl_follower']=="1") {
                            $nl_follower=1;
                        } else {
                            $nl_follower=0;
                        }

                        if($_POST['pb_follower']=="1") {
                            $pb_follower=1;
                        } else {
                            $pb_follower=0;
                        }

                        $model = new ModelUser();
                        $model->createUser($_POST['name1'], $_POST['pseudo'], $_POST['email'], $password, $role, $nl_follower, $pb_follower);

                        

                        $model = new ModelUser();
                        $user = $model->getUserByEmail($_POST['email']);
                    
                        $_SESSION['id'] = $user->getId_user();
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
                $error = "Les 2 champs password doivent être identiques";
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
        $email="";
        $model = new ModelUser();
        
        //$model->isConnected();
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $email = $_POST['email'];
            if(!empty($_POST['email']) && !empty($_POST['password'])){
                $model = new ModelUser();
                $user = $model->getUserByEmail($_POST['email']);
                var_dump($user,$_POST['password'],$user->getPassword());
                if($user && password_verify($_POST['password'], $user->getPassword())){
                    $_SESSION['id_user'] = $user->getId_user();
                    $_SESSION['name'] = $user->getName();
                    $_SESSION['pseudo'] =$user->getPseudo();
                    header('Location: /tumblrdev');
                } else {
                    $error = "Email/pasword incorrect";
                    require_once('./view/form-signin.php');
                }
            } else {
                $error = "Tous les champs doivent être remplis";
                require_once('./view/form-signin.php');
            }
        } else {
            require_once('./view/form-signin.php');
        } 
    }

    // Déconnexion d'un utilisateur.

    public function logout() {
        // header('Location: /leboncoin');
        session_unset();
        session_destroy();
        header('Location: /tumblrdev');
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





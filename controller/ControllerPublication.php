<?php
class ControllerPublication {

    public function home() {

        global $router;

        
        // Le controller appelle la méthode readville() du model ModelVille, et stocke le résultat dans une variable $datas.
        $model = new ModelPublication();
        $datas = $model->read();

        // var_dump($datas);

        //puis le controller affiche les données dans la vue homepage.php.
        require_once('./view/homepage.php');

    }

}
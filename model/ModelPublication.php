<?php

class ModelPublication extends Model{  
    
    public function read(){
        $req = $this->getDb()->query('SELECT id_publication, title, article
                                        FROM publication 
                                        ;');


$arrayobj = [];

while($datas = $req->fetch(PDO::FETCH_ASSOC)){

    $arrayobj[] = new Publication($datas);

}

return $arrayobj;

    }

}
<?php

namespace Models;

use Models\Users;

class ModelController extends Data{


    public function getAllusers(){
        $requette = "SELECT * FROM client";
        $statement = $this->connection()->prepare($requette);
        $statement->execute();
        $result = $statement->fetchAll();
        if($result){
            
            foreach($result as $resu){
                $user = new Users;
                $user->setNom($resu['nom']);
                
                $users[] = $user;
            }
            return $users;
        }

    }

    public function getCoach(){
        $requette = "SELECT * FROM coach";
        $statement = $this->connection()->prepare($requette);
        $statement->execute();

        return $statement->fetchAll();
    }
}
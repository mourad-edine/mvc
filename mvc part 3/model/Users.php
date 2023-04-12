<?php
namespace Models;

class Users{


    private $nom;

    public function getNom(){
        return $this->nom;
    }

    public function setNom($nom){
        $this->nom = $nom;
    }
}
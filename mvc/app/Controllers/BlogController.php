<?php

namespace App\Controllers;

class BlogController{

    public function index(){
        echo 'je suis la homepage ';
    }

    public function show(int $id){
        echo 'je suis le post '.$id;
    }

    public function contact(int $id){
        echo 'je suis le contact '.$id;
    }

}
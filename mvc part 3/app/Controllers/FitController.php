<?php

namespace App\Controllers;

use Models\ModelController;

class FitController extends Controller{

    public function index(){
        return $this->view('vue.index');
    }
    public function error(){
        return $this->view('vue.error');
    }

    public function user(){
        return $this->view('vue.user');
    }
    public function materiel(){
        return $this->view('vue.materiel');
    }

    public function newclient(){
        return $this->view('vue.newclient');
    }

    public function newcoach(){
        return $this->view('vue.addcoach');
    }


    public function coachlist(){
        $liste = new ModelController();
        $retour = $liste->getAllusers();
        $nom = 'jean pierre';
        
        return $this->view('vue.coach',compact('retour','nom'));
    }

    public function newcour(){
        return $this->view('vue.newcours');
    }

    public function local(){
        return $this->view('vue.local');
    }

    public function about(){
        return $this->view('vue.about');
    }




    /*public function show(int $id){
        return $this->view('blog.show',compact('id'));

    }

    public function contact(int $id){
        return $this->view('blog.contact',compact('id'));
    }*/

}
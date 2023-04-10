<?php

namespace App\Controllers;

class FitController extends Controller{

    public function index(){
        return $this->view('vue.index');
    }
    public function error(){
        return $this->view('vue.error');
    }

    /*public function show(int $id){
        return $this->view('blog.show',compact('id'));

    }

    public function contact(int $id){
        return $this->view('blog.contact',compact('id'));
    }*/

}
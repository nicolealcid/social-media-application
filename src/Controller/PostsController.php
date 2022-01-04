<?php
namespace App\Controller;

class PostsController extends AppController{

    public function index(){
        $this->set('posts', $this->Posts->find('all'));
    }
}
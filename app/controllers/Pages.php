<?php
  class Pages extends Controller {
    public function __construct(){
     
    }
    
    public function index(){
      if(isLoggedIn()){
        redirect('posts');
      }

      $data = [
        'title' => 'SharePosts',
        'description' => 'Сайт для добавление постов, регистрации пользователей.'
      ];
     
      $this->view('pages/index', $data);
    }

    public function about(){
      $data = [
        'title' => 'О нас',
        'description' => 'Чтение и добавление постов.'
      ];

      $this->view('pages/about', $data);
    }
  }
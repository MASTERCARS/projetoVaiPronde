<?php

namespace ProjetoVaiPronde\Controllers;

use ProjetoVaiPronde\Core\Controller;

class LoginController extends Controller{
    public function login()
    {
        $this->view('login',['pagina' => 'Pagina de login']);
    }

    public function criarconta()
    {
      $this->view('conta');
    }
}
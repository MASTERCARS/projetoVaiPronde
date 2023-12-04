<?php

namespace ProjetoVaiPronde\Controllers;

use ProjetoVaiPronde\Core\Controller;

class HomeController extends Controller{

    public function index()
    {
    $dados = ['titulo' => 'Projeto VaiPronde 2023'];
      $this->view('inicial',$dados);
    }
}
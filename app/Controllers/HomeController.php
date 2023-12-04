<?php

namespace ProjetoVaiPronde\Controllers;

use ProjetoVaiPronde\Core\Controller;

class HomeController extends Controller{

    public function index()
    {
      $this->view('inicial');
    }
}
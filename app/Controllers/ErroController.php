<?php

namespace ProjetoVaiPronde\Controllers;

use ProjetoVaiPronde\Core\Controller;

class ErroController extends Controller{
    public function erro404()
    {
     $this->view('404');
    }
}
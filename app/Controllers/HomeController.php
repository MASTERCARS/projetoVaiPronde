<?php

namespace ProjetoVaiPronde\Controllers;

use ProjetoVaiPronde\Core\Controller;

class HomeController extends Controller{

    public function index()
    {
    $dados = ['titulo' => 'Projeto VaiPronde 2023'];
      $this->view('inicial',$dados);
    }

    public function viagem()
    {
      $dados = ['titulo' => 'Projeto VaiPronde 2023'];
      $this->view('viagem',$dados);
    }
    
    public function sobre()
    {
      $dados = ['titulo' => 'Projeto VaiPronde 2023'];
      $this->view('sobre',$dados);
    }
    public function motoristaapp()
    {
      $dados = ['titulo' => 'Projeto VaiPronde 2023'];
      $this->view('motoristaapp',$dados);
    }

    public function viagemdetalhe()
    {
      $dados = ['titulo' => 'Projeto VaiPronde 2023'];
      $this->view('viagemdetalhe',$dados);
    }

}
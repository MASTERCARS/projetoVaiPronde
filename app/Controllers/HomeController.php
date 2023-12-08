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

    public function configbd()
    {
      $dados = ['titulo' => 'Projeto VaiPronde 2023'];
      $this->view('configbd',$dados);
    }

    public function financeiro()
    {
      $dados = ['titulo' => 'Projeto VaiPronde 2023'];
      $this->view('financeiro',$dados);
    }

    public function standby()
    {
      $dados = ['titulo' => 'Projeto VaiPronde 2023'];
      $this->view('standby',$dados);
    }
    public function perfil()
    {
      $dados = ['titulo' => 'Projeto VaiPronde 2023'];
      $this->view('perfil',$dados);
    }

    public function vinculo()
    {
      $dados = ['titulo' => 'Projeto VaiPronde 2023'];
      $this->view('vinculo',$dados);
    }

    public function testar()
    {
      $dados = ['titulo' => 'Projeto VaiPronde 2023'];
      $this->view('testar',$dados);
    }
   
  }





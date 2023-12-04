<?php

namespace  ProjetoVaiPronde\Core;

class Controller{
    protected function view($arquivo,$dados=[]){
    require PASTA_VIEW."{$aquivo}.view.php";
}

}
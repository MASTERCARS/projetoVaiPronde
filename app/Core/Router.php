<?php

namespace ProjetoVaiPronde\Core;

class Router{
        #metodos e propriedades estaticos são aqueles que não pertencem aos objetos intanciados de uma classe, 
        #    mas sim a propria classe e podem ser instanciados diretamente pela classe
        

        protected static array $rotas = [];
    
        public static function add(string $rota, string $controller, string $acao)
    {
            static::$rotas[$rota] = [$controller,$acao];
    }

        public static function exec(string $url)
        {
            $url = "/".$url;
            $rotas = static::$rotas;

            if( array_key_exists($url,$rotas) ){
                [$controller,$metodo] = $rotas[$url];
            }else{
                [$controller,$metodo] = $rotas['__erro'];
            }
            static::carregaController($controller,$metodo);
        }
 static function carregaController($controller,$metodo)
{
    $controller = NS_CONTROLLERS . $controller;
    $ctr = new $controller();
    $ctr->$metodo();
}
    }
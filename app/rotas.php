<?php

use ProjetoVaiPronde\Core\Router;

Router::add('/','HomeController','index');
Router::add('/login','LoginController','login');
Router::add('/teste','LoginController','teste');
Router::add('/cadastro','LoginController','criarconta');
Router::add('/viagem','HomeController','viagem');
Router::add('/sobre','HomeController','sobre');
Router::add('/motoristaapp','HomeController','motoristaapp');
Router::add('/viagemdetalhe','HomeController','viagemdetalhe');
<<<<<<< HEAD
Router::add('/configbd','HomeController','configbd');
Router::add('/financeiro','HomeController','financeiro');
Router::add('/standby','HomeController','standby');
Router::add('/perfil','HomeController','perfil');
Router::add('/vinculo','HomeController','vinculo');
=======

>>>>>>> 897a6f7baa17f4e514b5194b6b922f17e3fc400f

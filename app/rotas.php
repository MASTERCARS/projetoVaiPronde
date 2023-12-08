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
Router::add('/configbd','HomeController','configbd');
Router::add('/financeiro','HomeController','financeiro');
Router::add('/standby','HomeController','standby');
Router::add('/perfil','HomeController','perfil');
Router::add('/vinculo','HomeController','vinculo');

Router::add('/cadastro','HomeController','cadastro');

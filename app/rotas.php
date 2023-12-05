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


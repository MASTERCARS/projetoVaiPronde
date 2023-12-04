<?php
require "dadosviagem.php";
//caso o i não seja passado atravez do metodo get, irei mostrar uma mensagem de erro.
if(!isset($_GET["i"])){
        //echo "Erro! Nenhum Funcionário foi passado!";
        //header location -> faz o redirecionamento para um outro arquivo
        header("location: index-1.php");
        die;//Para a aplicação neste ponto.
}
$indice = $_GET["i"];
//Se o indice passado pelo usuário exixtir no meu array de funcionarios.
if(isset($viagem[$indice])){
$f = $viagem[$indice];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo2.css">
    <title>Document</title>
</head>
<body>
  
</body>
</html>
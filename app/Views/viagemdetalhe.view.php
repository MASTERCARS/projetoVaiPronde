<?php
require "dadosviagem.view.php";

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
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nova+Flat&family=Roboto&display=swap" rel="stylesheet">
    <title>Detalhes</title>
</head>
<body>
    <section id="sessao1">
 
  <div class="container">
  <?php
   if(isset($f)){ ?>
        <img src="<?=$f["foto"]?>" alt="<?=$f["nome"]?>">
        
   
  <form><h3>Pacote <?=$f["nome"]?></h3>

    <div class="form">  
        <label><strong>Nome:</strong><br><input type="text" id="idnome" nome="nome">
        </label> 

    </div>
    <div class="form">  
        <label><strong>Cpf:</strong><br><input type="text" id="idcpf" nome="cpf">
        </label> 

    </div>
    <div class="form">  
        <label><strong>Data de Ida:</strong><br><input type="date" id="idndata" nome="data">
        </label> 

    </div>
    <div class="form">  
        <label><strong>Data de Volta:</strong><br><input type="date" id="idndatavolta" nome="datavolta">
        </label> 

    </div>
    <div class="form1">
        <label class="title "><strong>Forma de Pagamento:</strong></label>  <br>
        <label><input type="radio" id="idradio1" nome="radio" value="radio1">Boleto
        </label> 
        <label><input type="radio" id="idradio2" nome="radio" value="radio2">Cartão
        </label> 
        <label><input type="radio" id="idradio3" nome="radio" value="radio3">Em dinheiro
        </label> 
    </div><br>
    <a href="viagem.php">Voltar</a>
    <a href="">Finalizar</a>
   
</form>
  <?php }else{
                echo "<h3>Pizza não encontrada</h3>";
            }?>
        </div>
</section>
</body>
</html>
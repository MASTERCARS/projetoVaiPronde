<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vai P'ronde?</title>
  <script src="https://unpkg.com/feather-icons"></script>
  <link rel="stylesheet" href="<?=css('estilo')?>">
  <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
</head> 

<body>
  <header>
    <nav>
      <img class="logo" src="<?=URL_BASE.'public/assets/logo.gif'?>" alt="Miami">
      <ul>
<<<<<<< HEAD
        <li><a href="<?=linkrota()?>">Inicio</a></li>
        <li><a href="<?=linkrota('viagem')?>">Viagens</a></li>
        <li><a href="<?=linkrota('sobre')?>">Sobre</a></li>
        <li><a href="<?=linkrota('login')?>">Cadastro</a></li>
        <li><a href="<?=linkrota('motoristaapp')?>">Motoristas</a></li>
=======
        <li><a href="#home">Inicio</a></li>
        <li><a href="<?=URL_BASE.'app/views/viagem.view.php'?>">Viagens</a></li>
        <li><a href="#servicos">Sobre</a></li>
        <li><a href="cadastro.php">Cadastro</a></li>
>>>>>>> 897a6f7baa17f4e514b5194b6b922f17e3fc400f
      </ul>
    </nav>

    <div  id="home" class="header-content">
      <h1>VAI P'RONDE?</h1>
      <p>Seu parceiro para realizar aquela viagem, conhecer lugares novos ou ganhar uma renda extra</p>
      <button>Saiba mais</button>
    </div>
  </header>
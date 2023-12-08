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
        <li><a href="<?=linkrota()?>">Inicio</a></li>
        <li><a href="<?=linkrota('viagem')?>">Viagens</a></li>
        <li><a href="<?=linkrota('sobre')?>">Sobre</a></li>
        <li><a href="<?=linkrota('login')?>">Cadastro</a></li>
        <li><a href="<?=linkrota('motoristaapp')?>">Motoristas</a></li>
      </ul>
    </nav>

    <div  id="home" class="header-content">
      <h1>VAI P'RONDE?</h1>
      <p>Seu parceiro para realizar aquela viagem, conhecer lugares novos ou ganhar uma renda extra</p>
      <button>Saiba mais</button>
    </div>
  </header>
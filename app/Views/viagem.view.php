
<?php
    require "dadosviagem.php";

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=css('estilo1')?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="https://unpkg.com/feather-icons"></script>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nova+Flat&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nova+Flat&family=Roboto:wght@300&display=swap" rel="stylesheet"><link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nova+Flat&family=Roboto&display=swap" rel="stylesheet">
    <title>Viagens</title>
</head>
<header>
<nav>
      <img class="logo" src="<?=URL_BASE.'public/imagem/logo.gif'?>" alt="Miami">
      <ul>
        <li><a href="<?=linkrota('')?>">Inicio</a></li>
        <li><a href="<?=linkrota('viagem')?>">Viagens</a></li>
        <li><a href="<?=linkrota('sobre')?>">Sobre</a></li>
        <li><a href="<?=linkrota('login')?>">Cadastro</a></li>
      </ul>
    </nav>
</header>
<body>
    
    <section id="sessao1">
        <h1>Pacotes</h1>
        <div class="container">
            <?php foreach($viagem as $i => $func){?>
            <div class="card">
            <div class="card-tag card-tag-top">
                <p><?=$func["promocao"]?></p>
            </div>
            <div class="card-tag card-tag-bottom">
                <p>R$ <?=$func["preco"]?></p>
            </div>
                <img class="card-image" src=<?=$func["foto"]?>>
            <div class="card-content">
          <h2><?=$func["nome"]?></h2>
          <ul>
            <li><i data-feather="coffee"></i>Café da manhã incluso</li>
            <li><i data-feather="wifi"></i>Wi-Fi</li>
            <li><i data-feather="map"></i>Passeio</li>
          </ul>
        </div>
        <a class="saiba" href="viagemdetalhe.php?i=<?=$i?>">Saiba Mais</a>
            </div>
            <?php } ?>
            
        </div>
        <script>
        feather.replace();
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
            });
        });
    });
    </script>

    </section>
    
    

</body>

<footer>
<div class="foo">
  <div class="cidademain">
    <div class="cidade"></div>
    <div class="cidade2"></div>
</div>

<div class="cidadeinfo">
    <div class="cidadeinforight">
        <p>© 2023 VAI P'RONDE todos os direitos reservados.</p>
    </div>
    <div class="cidadeinfo-left">
        <p>Tema <a href="#" target="_blank">VAI P'RONDE?</a></p>
    </div>
</div>
</div>
</footer>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Standby</title>
  <link rel="stylesheet" href="<?=css('motorista')?>">
</head>

<body>
  <div class="container">
    <header>
        <div class="header__container">
          <div class="top__menu">
            <div class="menu" onclick="toggleMenu(this)">
                <img src="<?=URL_BASE.'public/imagens/menu2.png'?>" alt="Menu">
                <ul class="submenu">
                    <li><a href="#">Opção 1</a></li>
                    <li><a href="#">Opção 2</a></li>
                    <li><a href="#">Opção 3</a></li>
                    <li><a href="#">Opção 4</a></li>
                    <li><a href="#">Opção 5</a></li>
                </ul>
            </div>
        </div>
        
            <div class="top__menu">
            <strong> <p>Vai Pronde? <br> para motoristas !</p></strong>
            </div>
            
            <div class="top__menu">
                <div class="van">
               <a href="<?=linkrota()?>"> <img src="<?=URL_BASE.'public/imagens/logo.gif'?>"></a>
            </div>
            </div>
            
       
        </div>

        <nav>

        <ul>
        <strong><li><a href="<?=linkrota()?>">Voltar</a></li></strong>
            <strong> <li><a href="<?=linkrota('motoristaapp')?>">Home</a></li></strong>
            <strong><li><a href="<?=linkrota('vinculo')?>">Vinculação</a></li></strong>
            <strong><li><a href="<?=linkrota('standby')?>">Standby</a></li></strong>
            <strong><li><a href="<?=linkrota('financeiro')?>">Financeiro</a></li></strong>
            <strong><li><a href="<?=linkrota('perfil')?>" class="perfil">Perfil</a></li></strong>


        </ul>
        </nav>
    </header>

    <div class="home__containers">
      <div class="linha"><hr></div>
        <div class="standby">
            <h2>Em Standby - Sem Rotas Disponíveis</h2>
            <p>Aguarde enquanto procuramos por viagens para você.</p>
            <button>Atualizar</button>
          </div>
  </div>




  <script>
    function toggleMenu(menu) {
        var submenu = menu.querySelector('.submenu');
        submenu.style.display = (submenu.style.display === 'block' || submenu.style.display === '') ? 'none' : 'block';
    }
</script>
<footer class="f2">
  <p>&copy; 2023 VaiPronde. Todos os direitos reservados.</p>
</footer>
</body>

</html>


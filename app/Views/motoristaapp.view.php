<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>App Motorista</title>
  <link rel="stylesheet" href="css/motorista.css">
</head>

<body>
  <div class="container">
    <header>
        <div class="header__container">
          <div class="top__menu">
            <div class="menu" onclick="toggleMenu(this)">
                <img src="imagens/menu-app-vpo.png" alt="Menu">
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
                <p>Vai Pronde? <br> para motoristas !</p>
            </div>
            
            <div class="top__menu">
                <div class="van">
                <img src="imagens/logo.gif">
            </div>
            </div>
            
       
        </div>

        <nav>

        <ul>
            <li><a href="motoristaapp.view.php" class="home">Home</a></li>
            <li><a href="vinculo.html">Vinculação</a></li>
            <li><a href="standby.html">Standby</a></li>
            <li><a href="financeiro.html">Financeiro</a></li>
            <li><a href="perfil.html">Perfil</a></li>

        </ul>
        </nav>
    </header>
    
    <div class="home__container">
      <div class="linha"><hr></div>
        <!-------Caixa de exibição dos resultados da semana----->
        
        <div class="home__saldo__semanal">
     <div class="conteiner2">
     <div class="e1">Atividade da Semana</div>
     <div class="e2"><div class="bto"><img src="imagens/rec.png" alt=""></div>
     </div>
     <div class="e3">Saldo</div>
     <div class="e4">R$ 355,09</div>
     <div class="e5">Viagens realizadas na semana: </div>
     <div class="e6">10</div>

     </div>
        

    </div>


<div class="home__info__seguro">
    <div id="btn-left" onclick="direcao(1)"> 
      <p><</p>
      </div>
        <div id="contentSlide">

          <div id="block">
            <div class="quadro1">
			
			</div>
          </div>
          <div id="block">
            <div class="quadro2">
			
			</div>
          </div>
          <div id="block">
            <div class="quadro3">
			
			</div>
          </div>
          <div id="block">
            <div class="quadro4">
			
			</div>
          </div>
          <div id="block">
            <div class="quadro5">
			
			</div>
          </div>
          <div id="block">
            <div class="quadro6">
			
			</div>
          </div>
          <div id="block">
            <div class="quadro7">
			
			</div>
          </div>
          <div id="block">
            <div class="quadro8">
			
			</div>
          </div>
          <div id="block">
            <div class="quadro9">
			
			</div>
          </div>
          <div id="block">
            <div class="quadro10">
			
			</div>
          </div>
       
          
          
        

        </div>
 

  <div id="btn-right" onclick="direcao(2)">
  >
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
<script type="text/javascript" src="appp.js"></script>
</html>


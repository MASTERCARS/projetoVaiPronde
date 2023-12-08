<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>App Motorista</title>
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
    
    <div class="home__container">
      <div class="linha"><hr></div>
        <!-------Caixa de exibição dos resultados da semana----->
        
        <div class="home__saldo__semanal">
     <div class="conteiner2">
     <div class="e1">Atividade da Semana</div>
     <div class="e2"><div class="bto"><img src="<?=URL_BASE.'public/imagens/rec.png'?>" alt=""></div>
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


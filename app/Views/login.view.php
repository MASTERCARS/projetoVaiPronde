<?php
  if(isset($_POST['submit'])){
    /*
    print_r('Usuario: ' . $_POST['usuario']);
    print_r("<br>");
    print_r('email: ' . $_POST['email']);
    print_r("<br>");
    print_r('Senha: ' . $_POST['senha']);
    */

    include_once('configbd.view.php');


    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(usuario, email, senha) VALUES ('$usuario', '$email', '$senha')");

  
  }

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cadastro e Login</title>
    <link rel="stylesheet" type="text/css" href="<?=css('style')?>" />
      

   <script
    src="https://kit.fontawesome.com/64d58efce2.js"
crossorigin="anonymous">
  </script>
  
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="<?=URL_BASE.'/app/views/login.view.php'?>" class="sign-in-form" method ="POST">
            <h2 class="title">LOGAR</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="usuario" placeholder="Usuário" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="senha" placeholder="Senha" />
            </div>
            <input type="submit" value="Login" class="btn solid" />

            <p class="social-text">Siga nas redes sociais</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>


          <form action="" class="sign-up-form">
            <h2 class="title">SE INSCREVA</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name = "usuario" placeholder="Usuário" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" name = "email"placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name = "senha" placeholder="Senha" />
            </div>
            <input type="submit" name = "submit" value="CADASTRAR" class="btn solid" />

            <p class="social-text">Siga nas redes sociais</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>
      <div class="panels-container">

        <div class="panel left-panel">
            <div class="content">
                <h3>É novo por aqui?</h3>
                <p>No VaiP'ronde a gente te recebe de braços abertos</p>
                <button class="btn transparent" id="sign-up-btn">Se Inscreva</button>
            </div>

            <img src="<?=URL_BASE.'public/img/turismo.png'?>" class="image" alt="">
        </div>

        <div class="panel right-panel">
            <div class="content">
                <h3>Já faz parte?</h3>
                <p>No VaiP'ronde você é sempre bem vindo</p>
                <button class="btn transparent" id="sign-in-btn" >Faça o Login</button> 
            </div>
            <img src="<?=URL_BASE.'public/img/guia.png'?>" class="image" alt="">
        </div>
      </div>
    </div>

    <script src="<?=URL_BASE.'app/Views/app.js'?>"></script>
  </body>
</html> 
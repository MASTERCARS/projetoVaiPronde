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

<!-- o banco de dados não esta salvando com o hmtl e abaixo. 
irei fazer acima um html funcional, que esta linkador com banco de dados --> 


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro</title>
  <style>
 /* Coloque este código no seu arquivo de estilos CSS */

body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background-color: #7FFFD4;
}

form {
  background-color: #fff;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  width: 300px; /* Ajuste a largura do formulário conforme necessário */
  max-width: 100%;
  text-align: center; /* Centraliza os elementos do formulário */
}

h2 {
  margin-bottom: 20px;
  text-align: center;
}

div {
  margin-bottom: 15px;
  text-align: left; /* Alinha os rótulos dos campos à esquerda */
  margin-right:10px;
}

label {
  display: block;
  font-weight: bold;
  margin-bottom: 5px;
}

input {
  width: 100%;
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

button {
  width: 100%;
  padding: 10px;
  background-color: #3498db;
  color: #fff;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

button:hover {
  background-color: #2980b9;
}


    </style>
</head>
<body>
<a href="<?=linkrota()?>"><img src="<?=URL_BASE.'public/imagens/logo.gif'?>"></a><br><br>
<form action="http://localhost/projetovaipronde/app/Views/login.view.php" method="POST">
  <h2>Cadastre-se</h2>
  <div>
    <label for="usuario">Usuário:</label>
    <input type="text" id="usuario" name="usuario" required>
  </div>
  <div>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
  </div>
  <div>
    <label for="senha">Senha:</label>
    <input type="password" id="senha" name="senha" required>
  </div>
  <div>
   <a href="<?=linkrota('cadastro')?>"> <button type="submit" name="submit">Cadastrar</button></a>
  </div>
</form>

</body>
</html>


<!--
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
          <form action="" class="sign-in-form" method ="POST">
            <h2 class="title">LOGAR</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="usuario" placeholder="Usuário" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="senha" placeholder="Senha" />
            </div>
            <input value="Login" class="btn solid" />

            <p class="social-text">Siga nas redes sociais</p>
            <div class="social-media">
              <a href="<?=linkrota('')?>" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="<?=linkrota('viagem')?>" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="<?=linkrota('vsobre')?>" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="<?=linkrota('login')?>" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>

        
          <form action="<?=URL_BASE .'app/Views/testar.view.php'?>" class="sign-up-form">
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
              <a href="<?=linkrota('index')?>" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="<?=linkrota('viagem')?>" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="<?=linkrota('sobre')?>" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="<?=linkrota('login')?>" class="social-icon">
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

--> 
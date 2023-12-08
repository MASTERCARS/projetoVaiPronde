<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Redirecionamento</title>
  <style>
    /* Arquivo styles.css */

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

.redirect-container {
  text-align: center;
}

.redirect-content {
  background-color: #fff;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  width: 300px;
  max-width: 100%;
}

h2 {
  margin-bottom: 20px;
}

.links {
  display: flex;
  justify-content: space-around;
  margin-top: 20px;
}

.links a {
  display: inline-block;
  padding: 10px 20px;
  background-color: #3498db;
  color: #fff;
  text-decoration: none;
  border-radius: 5px;
  transition: background-color 0.3s ease;
}

.links a:hover {
  background-color: #2980b9;
}

  </style>
</head>
<body>

<div class="redirect-container">
  <div class="redirect-content">
    <h2>Seja bem-vindo!</h2>
    <p>Você está logado.</p>
    <p>Agora você pode acessar:</p>
    <div class="links">
      <a href="<?=linkrota('cadastro')?>">login</a>
      <a href="<?=linkrota('login')?>">cadastro</a>
      <a href="<?=linkrota('')?>">inicio</a>
    </div>
  </div>
</div>

</body>
</html>

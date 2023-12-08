<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <style>/* Arquivo styles.css */

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

.login-container {
  text-align: center;
}

.login-form {
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

.input-field {
  margin-bottom: 15px;
  text-align: left;
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

.inputSumit {
  width: 100%;
  padding: 10px;
  background-color: #3498db;
  color: #fff;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.inputSumit:hover {
  background-color: #2980b9;
}
</style>
</head>
<body>
<a href="<?=linkrota()?>"><img src="<?=URL_BASE.'public/imagens/logo.gif'?>"></a><br><br>



<div class="login-container">
  <form action="http://localhost/projetovaipronde/app/Views/testelogin.view.php" method="POST" class="login-form">
    <h2>Login</h2>
    <div class="input-field">
      <label for="usuario">Email:</label>
      <input type="text" id="email" name="email" required>
    </div>
    <div class="input-field">
      <label for="senha">Senha:</label>
      <input type="password" id="senha" name="senha" required>
    </div>
    <input class="inputSumit" type="submit" name="submit" value="LOGIN">
  </form>
</div>

</body>
</html>

<?php
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){
        include_once('configbd.view.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];


    $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";
    $result = $conexao->query($sql);
if(mysqli_num_rows($result) < 1)
{

}else{
    header("Location: ");
}
    
    }else{
        echo '<meta http-equiv="refresh" content="0;URL=http://localhost/projetovaipronde/app/Views/cadastro.view.php">';

    }
?>
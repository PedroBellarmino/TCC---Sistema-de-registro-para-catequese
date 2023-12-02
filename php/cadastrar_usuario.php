<?php
include('conexao.php');

$nome = $_POST['nome_usu'];
$senha = $_POST['senha_usu'];
$email = $_POST['email_usu'];


$verifica_email = "SELECT * FROM usuario WHERE email_usu = '$email'";
$resultado_verificacao = mysqli_query($mysqli, $verifica_email);

if (mysqli_num_rows($resultado_verificacao) > 0) {

    echo ("Erro ao cadastrar: Este e-mail já está em uso. Por favor, utilize outro e-mail.");
} else {
   
    $sql = "INSERT INTO usuario (nome_usu, senha_usu, email_usu) VALUES ('$nome', '$senha', '$email')";
    $res = mysqli_query($mysqli, $sql);

    if ($res) {
    header("Location: ../html/homepage.php"); 
    exit; 
    } else {
        echo "Erro ao cadastrar. Por favor, tente novamente.";
    }
}

mysqli_close($mysqli);
?>

<?php
include('conexao.php');

$nome = $_POST['nome_adm'];
$senha = $_POST['senha_adm'];
$email = $_POST['email_adm'];


$verifica_email = "SELECT * FROM administrador WHERE email_adm = '$email'";
$resultado_verificacao = mysqli_query($mysqli, $verifica_email);

if (mysqli_num_rows($resultado_verificacao) > 0) {

    echo ("Erro ao cadastrar: Este e-mail já está em uso. Por favor, utilize outro e-mail.");
} else {
   
    $sql = "INSERT INTO administrador (nome_adm, senha_adm, email_adm) VALUES ('$nome', '$senha', '$email')";
    $res = mysqli_query($mysqli, $sql);

    if ($res) {
    header("Location: ../html/homepage_adm.html"); 
    exit; 
    } else {
        echo "Erro ao cadastrar. Por favor, tente novamente.";
    }
}

mysqli_close($mysqli);
?>
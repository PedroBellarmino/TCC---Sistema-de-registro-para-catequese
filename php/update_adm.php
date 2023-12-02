<?php
include('conexao.php');

$nome_adm = $_POST['nome_adm'];
$email_adm = $_POST['email_adm'];


$sql = "update administrador set nome_adm='$nome_adm',email_adm='$email_adm' where id_adm='$id_adm'";
    $res = mysqli_query($mysqli, $sql);

    if ($res) {
    header("Location: lista_adm.php"); 
    exit; 
    } else {
        echo "Erro ao cadastrar. Por favor, tente novamente.";
    }

mysqli_close($mysqli);
?>
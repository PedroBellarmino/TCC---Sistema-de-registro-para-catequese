<?php
include('conexao.php');
$nome_tur = $_POST['nome_tur'];
$horario= $_POST['horario_tur'];
$sala = $_POST['sala_tur'];
$faixa = $_POST['faixa_tur'];
$status= $_POST['status_tur'];
$sql = "INSERT INTO turma (nome_tur, horario_tur, sala_tur, faixa_tur, status_tur) VALUES ('$nome_tur', '$horario', '$sala', '$faixa', '$status')";
$res = mysqli_query($mysqli, $sql);

if ($res) {
    header("Location: ../html/cadastrar_turma.html"); 
    exit; 

} else {
    echo "Erro ao cadastrar";

}
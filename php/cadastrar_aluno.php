<?php
include('conexao.php');

$nome = $_POST['nome_alu'];
$data = $_POST['data_alu'];
$sexo = $_POST['sexo_alu'];
$endereco = $_POST['endereco_alu'];
$telefone = $_POST['telefone_alu'];
$cpf = $_POST['cpf_alu'];
$inscricao = $_POST['inscricao_alu'];
$batismo = $_POST['batismo_alu'];
$turma = $_POST['turma'];

$sql2 = "SELECT * FROM turma WHERE nome_tur='$turma'"; //ver qual a turma pelo nome
$res2 = mysqli_query($mysqli, $sql2); // executa código
$linha = mysqli_fetch_array($res2); //separa os dados em array e taca pra dentro da variavel linha
$cod = $linha["id_tur"]; //pega o campo id e taca pra dentro de código

$verifica_cpf = "SELECT * FROM aluno WHERE cpf_alu = '$cpf'";
$resultado_verificacao = mysqli_query($mysqli, $verifica_cpf);

if (mysqli_num_rows($resultado_verificacao) > 0) {

    echo ("Erro ao cadastrar: Este cpf já está em uso.");
} else 

$sql = "INSERT INTO aluno (nome_alu, data_alu, sexo_alu, endereco_alu, telefone_alu, cpf_alu, inscricao_alu, batismo_alu, turma_id) VALUES ('$nome', '$data', '$sexo', '$endereco', '$telefone', '$cpf','$inscricao', '$batismo', '$cod')";
$res = mysqli_query($mysqli, $sql);

if (($res) && ($res2)) {
    header("Location: ../html/cadastro_aluno.php"); 
    exit; 

} else {
    echo "Erro ao cadastrar";

}
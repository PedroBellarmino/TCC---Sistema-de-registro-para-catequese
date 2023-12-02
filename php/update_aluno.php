<?php
include('conexao.php');
$id_alu = $_POST['id_alu'];
$nome = $_POST['nome_alu'];
$data = $_POST['data_alu'];
$sexo = $_POST['sexo_alu'];
$endereco = $_POST['endereco_alu'];
$telefone = $_POST['telefone_alu'];
$cpf = $_POST['cpf_alu'];
$inscricao = $_POST['inscricao_alu'];
$batismo = $_POST['batismo_alu'];


$sql = "update aluno set nome_alu='$nome',data_alu='$data',sexo_alu='$sexo',endereco_alu='$endereco',telefone_alu='$telefone',cpf_alu='$cpf',inscricao_alu='$inscricao',batismo_alu='$batismo' where id_alu='$id_alu'";

$res = mysqli_query($mysqli, $sql);

if ($res) { ?>
    <!DOCTYPE html>
<html>
<head>
    <title>Atualizar turmas</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
    </style>
</head>
<body>
    <div style="text-align: center;">
        <h1>Aluno atualizada com sucesso!</h1>
    </div>

    <script>
        setTimeout(function() {
            window.location.href ="lista_aluno.php"; 
        }, 2000); 
    </script>
</body>
</html>
<?php
} else {

    echo "Erro ao atualizar";
}
?>
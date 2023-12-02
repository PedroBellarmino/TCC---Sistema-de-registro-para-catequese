<?php
include('conexao.php');

$pk = $_GET[('id_alu')];

$sql = "UPDATE aluno set status_alu = 'Ativo' where id_alu= $pk";

$res = mysqli_query($mysqli, $sql);

if ($res) { ?>
    <!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="../img/cruz.ico.png">
    <title>Reativar</title>
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
        <h1>Aluno ativado/a com sucesso</h1>
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

    echo "Erro ao deletar";
}
?>
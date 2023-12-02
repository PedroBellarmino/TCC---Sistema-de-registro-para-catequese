<?php
include('conexao.php');

$pk = $_GET[('id_tur')];

$sql = "UPDATE turma set status_tur = 'desativada' where id_tur= $pk";

$res = mysqli_query($mysqli, $sql);

if ($res) { ?>
    <!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="../img/cruz.ico.png">
    <title>Desativa</title>
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
        <h1>Turma desativada com sucesso</h1>
    </div>

    <script>
        setTimeout(function() {
            window.location.href ="lista_turma.php"; 
        }, 2000); 
    </script>
</body>
</html>
<?php
} else {

    echo "Erro ao deletar";
}
?>
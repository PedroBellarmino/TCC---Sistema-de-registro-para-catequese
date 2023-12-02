<?php
include('conexao.php');
$id_tur = $_POST['id_tur'];
$nome_tur = $_POST['nome_tur'];
$horario= $_POST['horario_tur'];
$sala = $_POST['sala_tur'];
$faixa = $_POST['faixa_tur'];

$sql = "update turma set nome_tur='$nome_tur',horario_tur='$horario',sala_tur='$sala',faixa_tur='$faixa' where id_tur='$id_tur'";

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
        <h1>Turma atualizada com sucesso!</h1>
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

    echo "Erro ao atualizar";
}
?>
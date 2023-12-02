<?php
include('conexao.php');
$id_usu = $_POST['id_usu'];
$nome = $_POST['nome_usu'];
$email = $_POST['email_usu'];

$sql = "update usuario set nome_usu='$nome',email_usu='$email' where id_usu='$id_usu'";

$res = mysqli_query($mysqli, $sql);

if ($res) { ?>
    <!DOCTYPE html>
<html>
<head>
    <title>Atualizar usuario</title>
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
        <h1>Usuário atualizada com sucesso!</h1>
    </div>

    <script>
        setTimeout(function() {
            window.location.href ="lista_usuario_adm.php"; 
        }, 2000); 
    </script>
</body>
</html>
<?php
} else {

    echo "Erro ao atualizar";
}
?>
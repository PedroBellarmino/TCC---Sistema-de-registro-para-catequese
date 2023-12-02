<?php
include('conexao.php');
$pk = $_GET['id_usu'];
$sql = "Select * from usuario where id_usu=$pk";
$res = mysqli_query($mysqli,$sql);
while ($linha = mysqli_fetch_array($res)){ ?>

<html>

<!DOCTYPE html>
<html lang="pt-br">

<!-- Links Bootstrap -->

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>

    <!-- Titulo -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar usuário</title>
</head>
<link rel="shortcut icon" href="../img/cruz.ico.png">

    <!-- Cadastro -->
    <div class="container vh-100">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-md-8">
                <div style="margin-top: -20px;"></div>
                <div class="card">
                    <div class="card-header ">
                        <h3>Alterar dados usuario:</h3>
                    </div>
                    <div class="card-body">

                    <form action='update_usuario.php' method='post'>
            <input type='hidden' name='id_usu' value="<?php echo $linha['id_usu'];?>"></td>
            </tr>

            <div class="form-group">
                                <label for="nome">Nome completo:</label>
                                <input type="text" id="nome" class="form-control rounded-pill" name="nome_usu" value="<?php echo $linha['nome_usu'];?>"></td>
                                
                            </div>

                            <div class="form-group">
                                <label for="nome">Email:</label>
                                <input type="text" id="nome" class="form-control rounded-pill" name="email_usu" value="<?php echo $linha['email_usu'];}?>"></td>
                            </div>

                            <div class="text-center" style="margin-top: 40px;">
                            <button type="submit" class="btn btn-success px-5 rounded-pill">Alterar</button>
                            <a href="lista_usuario_adm.php" class="btn btn-success px-5 rounded-pill">Voltar</a>
                        </div>      
            </tr>
        </form>
    </table>

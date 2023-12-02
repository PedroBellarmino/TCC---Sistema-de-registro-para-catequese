<?php
include('../php/conexao.php');

if(isset($_POST['nome_usu']) || isset($_POST['senha_usu'])) {

    if(strlen($_POST['nome_usu']) == 0) {
    } else if(strlen($_POST['senha_usu']) == 0) {
    } else {

        $nome = $mysqli->real_escape_string($_POST['nome_usu']);
        $senha = $mysqli->real_escape_string($_POST['senha_usu']);

        $sql_code = "SELECT * FROM usuario WHERE nome_usu = '$nome' AND senha_usu = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id_usu'] = $usuario['id_usu'];
            $_SESSION['nome_usu'] = $usuario['nome_usu'];

            header("Location: homepage.php");

        } else {
            echo "Falha ao logar! E-mail ou senha incorretos";
        }

    }

}
?>

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
    <title>Login</title>
</head>
<link rel="shortcut icon" href="../img/cruz.ico.png">

    <!-- Cadastro -->
    <div class="container vh-100">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-md-8">
                <div style="margin-top: -70px;"></div>
                <div class="card">
                    <div class="card-header">
                        <h3>Login:</h3>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
    
                            <div class="form-group">
                                <label for="nome">Nome completo:</label>
                                <input type="text" id="nome" placeholder="Digite seu nome" class="form-control rounded-pill" name="nome_usu" required />
                            </div>

                            <div class="form-group">
                                <label for="password">Senha:</label>
                                <input type="password" placeholder="Digite sua senha" id="password" class="form-control rounded-pill" name="senha_usu" required />
                                <input type="checkbox" id="showPassword" onclick="togglePasswordVisibility()"> Mostrar senha
                            </div>

                            <script src="js/bootstrap.bundle.min.js"></script>
                            <script>
                                function togglePasswordVisibility() {
                                    var passwordInput = document.getElementById("password");
                                    var showPasswordCheckbox = document.getElementById("showPassword");
                        
                                    if (passwordInput.type === "password") {
                                        passwordInput.type = "text";
                                    } else {
                                        passwordInput.type = "password";
                                    }
                                }
                            </script>

                          
                        </div>

                        <div class="text-center" style="margin-top: 40px;">
                            <button  href="index.html" type="submit" class="btn btn-success px-5 rounded-pill"  style="margin-top: -102px;" name="submit">Entrar</button>
                            <a href="cadastrar_usuario.html" class="btn btn-success px-5 rounded-pill" style="margin-top: -102px;" >Voltar</a>
                        </div>                        
                            </div>
                        </form>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>          
    </body>

    </html>
<?php
require 'conexao.php';

$pk = $_GET['id_adm'];

$sql = "Select * from administrador where id_adm=$pk";

$res = mysqli_query($mysqli,$sql);
while ($linha = mysqli_fetch_array($res)) { ?>

<!DOCTYPE html>
<html lang="pt-br">
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro necessário</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    
</head>
<body>
    
    <form action='update_adm.php'method='post'>
    <div class="container vh-100">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-md-8">
                <div style="margin-top: -20px;"></div>
                <di class="card">
                    <div class="card-header">
                        <h3>Alterar dados</h3>
                    </div>
                    <div class="card-body">
    
                            <div class="form-group">
                                <label for="nome">Nome completo:</label>
                                <input type="text" id="nome" placeholder="Digite seu nome" class="form-control rounded-pill" name="nome_adm" required value="<?php echo $linha['nome_adm']; ?>">
                                
                            </div>

                            <div class="form-group">
                                <label for="nome">Email:</label>
                                <input type="text" id="nome" class="form-control rounded-pill" name="email_adm" required value="<?php echo $linha['email_adm']; }?>">
                            </div>
                        </div>

                        <div class="text-center" style="margin-top: 17px;">
                <!-- <button type="submit" class="btn btn-success">Cadastrar</button> -->
                <a type="submit" href="update_adm.php" class="btn btn-success rounded-pill">Alterar</a>
                <a href="lista_adm.php" class="btn btn-success rounded-pill">Voltar</a>
            </div>                  
                
                        
                    </form>
                </div>
            </div>
        </div>
    </div>          
    </body>

    </html>
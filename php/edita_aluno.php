<?php
include('conexao.php');
$pk = $_GET['id_alu'];
$sql = "Select * from aluno where id_alu=$pk";
$res = mysqli_query($mysqli,$sql);
while ($linha = mysqli_fetch_array($res)){ ?>

<html>

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
    <title>Atualizar alunos</title>
</head>
<link rel="shortcut icon" href="../img/cruz.ico.png">

  <!-- Cadastro -->
  <div class="container vh-100">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-md-8">
                <div style="margin-top: -160px;"></div>
                <div class="card">
                    <div class="card-header">
                        <h3>Formulário de cadastro:</h3>
                    </div>
                    <div class="card-body">

                    
                    <div class="row">
                            
                            <div class="col-md-6">

                    <form action='update_aluno.php' method='post'>
            <input type='hidden' name='id_alu' value="<?php echo $linha['id_alu'];?>"></td>
            </tr>

            <div class="form-group">
        <label for="nome">Nome completo:</label>
        <input type="text" id="nome" class="form-control rounded-pill" name="nome_alu" value="<?php echo $linha['nome_alu'];?>"></td>
    </div>
</div>

    
    <div class="col-md-6">
        <div class="form-group">
            <label for="data_nascimento">Data de nascimento:</label>
            <input type="date" id="data_nascimento" class="form-control rounded-pill" name="data_alu" value="<?php echo $linha['data_alu'];?>"></td>
        </div>
    </div>
</div>

    
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="sexo">Gênero:</label>
            <select class="form-select rounded-pill" name="sexo_alu" value="<?php echo $linha['sexo_alu'];?>"></td>
                <option value="" disabled selected>Selecione</option>
                <option value="Masculino">Masculino</option>
                <option value="Feminino">Feminino</option>
                <option value="Não especificado">Não especificado</option>
            </select>
        </div>

    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="endereco">Endereço:</label>
            <input type="text" id="endereco" class="form-control rounded-pill" name="endereco_alu" value="<?php echo $linha['endereco_alu'];?>"></td>
        </div>
    </div>
</div>

    
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="telefone">Telefone:</label>
            <input type="tel" id="telefone" class="form-control rounded-pill" name="telefone_alu" value="<?php echo $linha['telefone_alu'];?>"></td>
        </div>
    </div>
    <script>
    $(document).ready(function () {
        $('#telefone').inputmask("(48) 9999-9999");
    });
</script>


    <div class="col-md-6">
        <div class="form-group">
            <label for="cpf">CPF:</label>
            <input type="text" id="cpf" class="form-control rounded-pill" name="cpf_alu" value="<?php echo $linha['cpf_alu'];?>"></td>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('#cpf').inputmask("999.999.999.99");
    });
</script>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="data_batismo">Data de inscrição:</label>
            <input type="date" id="data_batismo" class="form-control rounded-pill" name="inscricao_alu" value="<?php echo $linha['inscricao_alu'];?>"></td>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="data_batismo">Data de batismo:</label>
            <input type="date" id="data_batismo" class="form-control rounded-pill" name="batismo_alu" value="<?php echo $linha['batismo_alu'];}?>"></td>
        </div>
    </div>
</div>

                        <div class="text-center" style="margin-top: 40px;">
                            <button type="submit" class="btn btn-success px-5 rounded-pill">Alterar</button>
                            <a href="lista_aluno.php" class="btn btn-success px-5 rounded-pill">Voltar</a>
                        </div>      
                        </form>
                </div>
            </div>
        </div>
    </div>          
    </body>

    </html>
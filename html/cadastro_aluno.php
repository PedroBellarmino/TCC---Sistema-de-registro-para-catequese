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

        <!-- Adicione a biblioteca Inputmask usando um CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.6/jquery.inputmask.min.js"></script>


    <!-- Titulo -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de alunos</title>
</head>
<link rel="shortcut icon" href="../img/cruz.ico.png">

<!-- Navbar -->
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <br>
            <a href="#" class="navbar-brand h1 mb-1">
                <img src="../img/logo.png" width="149" href="homepage.html" >
            </a>
            

            <div data-target="#navbarsite"></div>

            <div class="collapse navbar-collapse" id="navbarsite">
                <ul class="navbar-nav mr-auto">

                    <li class="nav-item"></li>
                    <a class="nav-link" href="homepage.php">Início</a>

                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" id="navdrop">Alunos</a>
                        <div class="dropdown-menu">
                            <a href="" class="dropdown-item">Cadastrar alunos</a>
                            <a href="../php/lista_turma_usuario.php" class="dropdown-item">Turmas</a>
                        </div>

                        <li class="nav-item"></li>
                    <a class="nav-link" href="contato.html">Contato</a>

                    <li class="nav-item"></li>
                    <a class="nav-link" href="../php/lista_usuario.php" >Usuários</a>

                    
                    <li class="nav-item"></li>
                    <a class="nav-link" href="../php/logout_usuario.php" >Sair</a>

                </ul>
            </div>

        </div>
    </nav>


    <!-- Cadastro -->
    <div class="container vh-100">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-md-8">
                <div style="margin-top: -100px;"></div>
                <div class="card">
                    <div class="card-header">
                        <h3>Formulário de cadastro:</h3>
                    </div>
                    <div class="card-body">
                        <form action="../php/cadastrar_aluno.php" method="post">
    
                        <div class="row">
                            
                        <div class="col-md-6">
                            
    <div class="form-group">
        <label for="nome">Nome completo:</label>
        <input type="text" id="nome" placeholder="Digite o nome do aluno" class="form-control rounded-pill" name="nome_alu" required />
    </div>
</div>

    
    <div class="col-md-6">
        <div class="form-group">
            <label for="data_nascimento">Data de nascimento:</label>
            <input type="date" id="data_nascimento" class="form-control rounded-pill" name="data_alu" required />
        </div>
    </div>
</div>

    
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="sexo">Gênero:</label>
            <select class="form-select rounded-pill" name="sexo_alu" required>
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
            <input type="text" id="endereco" placeholder="Informe o endereço" class="form-control rounded-pill" name="endereco_alu" required />
        </div>
    </div>
</div>

    
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="telefone">Telefone:</label>
            <input type="tel" id="telefone" class="form-control rounded-pill" placeholder="Informe o telefone" name="telefone_alu" required />
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
            <input type="text" id="cpf" placeholder="Informe o CPF do aluno" class="form-control rounded-pill" name="cpf_alu" required />
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
            <input type="date" id="data_batismo" class="form-control rounded-pill" name="inscricao_alu" required />
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="data_batismo">Data de batismo:</label>
            <input type="date" id="data_batismo" class="form-control rounded-pill" name="batismo_alu" required />
        </div>
    </div>
</div>


                            <div class="form-group">
                                <label for="sexo">Turma:</label>
                                <select class="form-select rounded-pill" aria-label="Default select example" name="turma" required>
                            <option selected></option>
                            <?php
                            include("../php/conexao.php");

                            $sql = ('SELECT * FROM turma');
                            $res = mysqli_query($mysqli, $sql);

                            while ($linha = mysqli_fetch_array($res)) { 
                            ?>

                            <option><?php echo $linha['nome_tur'];?></option>
                            <?php } ?>
                        </select>

            
                        <div class="text-center" style="margin-top: 40px;">
                            <button  href="tela_cadastro.html" type="submit" class="btn btn-success px-5 rounded-pill" name="submit">Cadastrar</button>
                            <a href="homepage.html" class="btn btn-success px-5 rounded-pill">Voltar</a>
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
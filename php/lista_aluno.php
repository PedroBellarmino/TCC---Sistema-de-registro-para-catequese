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
    <title>Lista de alunos</title>
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
                    <a class="nav-link" href="../html/homepage_adm.php">Início</a>

                    <li class="nav-item dropdown">
                        <a href="" class="nav-link" id="navdrop">Alunos</a>
                        <div class="dropdown-menu">
                        </div>

                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" id="navdrop">Turmas</a>
                            <div class="dropdown-menu">
                                <a href="../html/cadastrar_turma.html" class="dropdown-item">Cadastrar turma</a>
                                <a href="lista_turma.php" class="dropdown-item">Visualizar</a>
                            </div>

                            <li class="nav-item"></li>
                            <a class="nav-link" href="lista_usuario_adm.php" >Usuários</a>

                    <li class="nav-item"></li>
                    <a class="nav-link" href="lista_adm.php" >Administradores</a>

                    <li class="nav-item"></li>
                    <a class="nav-link" href="../html/cadastrar_adm.html" >Sair</a>

                </ul>
            </div>

    



                </ul>

              <div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <form class="form-inline my-2 my-lg-0" method="post">
            <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar por aluno" aria-label="Search" name="termo_pesquisa">
        </form>
    </nav>

            </div>

        </div>
    </nav>


    <?php
require 'conexao.php';

$termoPesquisa = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $termoPesquisa = $_POST['termo_pesquisa'];

    // Utiliza o termo de pesquisa na consulta SQL
    $sql = "SELECT * FROM aluno WHERE nome_alu LIKE '%$termoPesquisa%' OR sexo_alu LIKE '%$termoPesquisa%' OR status_alu LIKE '%$termoPesquisa%'";
} else {
    $sql = "SELECT * FROM aluno";
}


$res = mysqli_query($mysqli, $sql);
$contadorAlunos = 0; 
?>

    <div id="tabela">
        <h5>Total de alunos no sistema: <?php echo mysqli_num_rows($res); ?></h5>
        <table class="table table-bordered">
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Data de nascimento</th>
                <th scope="col">Sexo</th>
                <th scope="col">Endereco</th>
                <th scope="col">Telefone</th>
                <th scope="col">Cpf</th>
                <th scope="col">inscrição</th>
                <th scope="col">Batismo</th>
                <th scope="col">Turma</th>
                <th scope="col">Status</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
            <tbody>
                <?php
                while ($linha = mysqli_fetch_array($res)) {
              
                    $contadorAlunos++; 
                    ?>
                    <tr>
                        <td><?php echo $linha['nome_alu']; ?></td>
                        <td><?php echo $linha['data_alu']; ?></td>
                        <td><?php echo $linha['sexo_alu']; ?></td>
                        <td><?php echo $linha['endereco_alu']; ?></td>
                        <td><?php echo $linha['telefone_alu']; ?></td>
                        <td><?php echo $linha['cpf_alu']; ?></td>
                        <td><?php echo $linha['inscricao_alu']; ?></td>
                        <td><?php echo $linha['batismo_alu']; ?></td>
                        <td><?php echo $linha['turma_id']; ?></td>
                        <td><?php echo $linha['status_alu']; ?></td>
                        <td ><a class="btn border btn-danger" href="excluir_aluno.php?id_alu=<?php echo $linha['id_alu']; ?>">Desativar</a></td>
                        <td ><a class="btn border btn-success" href="reativar_aluno.php?id_alu=<?php echo $linha['id_alu']; ?>">Reativar</a></td>
                    <td ><a class="btn border" href="edita_aluno.php?id_alu=<?php echo $linha['id_alu']; ?>">Alterar</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>

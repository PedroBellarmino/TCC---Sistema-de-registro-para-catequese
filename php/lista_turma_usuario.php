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
    <title>Turmas</title>
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
                    <a class="nav-link" href="../html/homepage.php">Início</a>

                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" id="navdrop">Alunos</a>
                        <div class="dropdown-menu">
                            <a href="../html/cadastro_aluno.php" class="dropdown-item">Cadastrar alunos</a>
                            <a href="../php/lista_turma_usuario.php" class="dropdown-item">Turmas</a>
                        </div>

                        <li class="nav-item"></li>
                    <a class="nav-link" href="../html/contato.html">Contato</a>

                    <li class="nav-item"></li>
                    <a class="nav-link" href="../php/lista_usuario.php" >Usuários</a>

                    
                    <li class="nav-item"></li>
                    <a class="nav-link" href="../php/logout_usuario.php" >Sair</a>

                </ul>
            </div>
                <div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <form class="form-inline my-2 my-lg-0" method="post">
            <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar por turma" aria-label="Search" name="termo_pesquisa">
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


    $sql = "SELECT * FROM turma WHERE (nome_tur LIKE '%$termoPesquisa%' OR horario_tur LIKE '%$termoPesquisa%' OR faixa_tur LIKE '%$termoPesquisa%') AND status_tur = 'ativa'";
} else {
    $sql = "SELECT * FROM turma WHERE status_tur = 'ativa'";
}


$res = mysqli_query($mysqli, $sql);
$contadorAlunos = 0; 
?>

    <div id="tabela">
        <h5>Total de turmas cadastradas: <?php echo mysqli_num_rows($res); ?></h5>
        <table class="table table-bordered">
            <tr>
                <th scope="col">Turma</th>
                <th scope="col">Horários</th>
                <th scope="col">Sala</th>
                <th scope="col">Faixa étaria</th>
                <th scope="col">Status</th>
                <th scope="col">Visualizar</th>
            </tr>
            <tbody>
                <?php
                while ($linha = mysqli_fetch_array($res)) {
                    $contadorAlunos++; 
                    ?>
                    <tr>
                        <td><?php echo $linha['nome_tur']; ?></td>
                        <td><?php echo $linha['horario_tur']; ?></td>
                        <td><?php echo $linha['sala_tur']; ?></td>
                        <td><?php echo $linha['faixa_tur']; ?></td>
                        <td><?php echo $linha['status_tur']; ?></td>
                        <td ><a class="btn border" href="ver_turma.php?id_tur=<?php echo $linha['id_tur']; ?>">Ver</a></td>
                        </td>
                </tr>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>
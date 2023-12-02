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
    <title>Eventos</title>
    <link rel="shortcut icon" href="../img/cruz.ico">
</head>

<!-- Navbar -->
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <br>
            <a href="#" class="navbar-brand h1 mb-1">Paroquía <br>Santo António</a>
            

            <div data-target="#navbarsite"></div>

            <div class="collapse navbar-collapse" id="navbarsite">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"></li>
                    <a class="nav-link" href="../html/homepage.html">Início</a>

                    <li class="nav-item dropdown">
                        <a href="../php/horarios.php" class="nav-link"  id="navdrop">Eventos</a>
                        <div class="dropdown-menu">
                        </div>

                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" id="navdrop">Alunos</a>
                        <div class="dropdown-menu">
                            <a href="../html/cadastrar_aluno.html" class="dropdown-item">Cadastrar alunos</a>
                            <a href="visualiza_aluno.php" class="dropdown-item">Visualizar alunos</a>
                            <a href="#" class="dropdown-item">Turmas</a>
                        </div>

                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" id="navdrop">Doações</a>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Dízimo</a>
                            <a href="#" class="dropdown-item">Registro de doações</a>
                        </div>

                        <li class="nav-item"></li>
                    <a class="nav-link" href="../html/contato.html">Contato</a>

                    <li class="nav-item"></li>
                    <a class="nav-link" href="../html/cadastrar_usuario.html">Usuário</a>

                </ul>
            </div>

        </div>
    </nav>


<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Missas</th>
      <th scope="col">Data</th>
      <th scope="col">Horário</th>
      <th scope="col">Evento</th>
    </tr>
  </thead>
  <tbody>
    <tr>
  
      <td>Sábado</td>
      <td>18/11/2023</td>
      <td>19:30</td>
      <td>Sábado da 32ª Semana do Tempo Comum</td>
    </tr>
    <tr>

      <td>Domingo</td>
      <td>19/11/2023</td>
      <td>19:00</td>
      <td>33º Domingo do tempo comum</td>
    </tr>
    <tr>
  
     <td>Sábado</td>
      <td>25/11/2023</td>
      <td>19:30</td>
      <td>Sábado da 33ª Semana do Tempo Comum</td>

      <tr>
      <td>Domingo</td>
      <td>26/11/2023</td>
      <td>19:00</td>
      <td>Nosso senhor Jesus cristo, rei do universo</td>

      <tr>
      <td>Sábado</td>
      <td>02/12/2023</td>
      <td>19:30</td>
      <td>Sábado da 34ª Semana do Tempo Comum</td>

    </tr>
  </tbody>
</table>
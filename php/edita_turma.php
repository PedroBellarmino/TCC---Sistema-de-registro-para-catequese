<?php
include('conexao.php');
$pk = $_GET['id_tur'];
$sql = "Select * from turma where id_tur=$pk";
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
    <title>Atualizar turmas</title>
</head>
<link rel="shortcut icon" href="../img/cruz.ico.png">

          <!-- Cadastro -->
           <div class="container vh-100">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-md-8">
                <div style="margin-top: -90px;"></div>
                <div class="card">
                    <div class="card-header">
                        <h3>Alterar dados da turma:</h3>
                    </div>

        <form action='update_turma.php' method='post'>
            <input type='hidden' name='id_tur' value="<?php echo $linha['id_tur'];?>"></td>
            </tr>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="nome">Turma:</label>
                                    <input type="text" id="nome" class="form-control rounded-pill" name="nome_tur" value="<?php echo $linha['nome_tur'];?>"></td>
                                </div>
                                
                                <div class="form-group col-md-6">
                                    <label for="nome">Horário:</label>
                                    <input type="text" id="nome" class="form-control rounded-pill" name="horario_tur" value="<?php echo $linha['horario_tur'];?>"></td>
                                </div>
                            </div>
                            

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="sala">Sala:</label>
                                    <input type="text" id="sala"  class="form-control rounded-pill" name="sala_tur"  value="<?php echo $linha['sala_tur'];?>"></td>
                                </div>
                            
                                <div class="form-group col-md-6">
                                    <label for="faixa_etaria">Faixa etária:</label>
                                    <input type="text" id="faixa_etaria" class="form-control rounded-pill" name="faixa_tur"  value="<?php echo $linha['faixa_tur'];}?>"></td>
                                </div>
                            </div>

                            <div class="text-center" style="margin-top: 40px;">
                            <button type="submit" class="btn btn-success px-5 rounded-pill">Alterar</button>
                            <a href="lista_turma.php" class="btn btn-success px-5 rounded-pill">Voltar</a>
                        </div>      
            </tr>
        </form>
    </table>
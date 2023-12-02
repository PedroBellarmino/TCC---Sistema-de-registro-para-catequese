<?php

if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['id_adm'])) {
    die("Você não pode acessar esta página porque não está logado.<p><a href=\"login_adm.php\">Entrar</a></p>");
}


?>
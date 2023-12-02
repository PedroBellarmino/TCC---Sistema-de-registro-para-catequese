<?php

if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['id_usu'])) {
    die("Você não pode acessar esta página porque não está logado.<p><a href=\"login_usuario.php\">Entrar</a></p>");
}


?>
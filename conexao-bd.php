<?php
define("HOST", "127.0.0.1");
define("USUARIO", "root");
define("SENHA", "nerd");
define("DB", "bd");

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ("Erro ao se conectar");
?>
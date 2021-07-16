<?php
session_start();
include("conex.php");

if(empty($_POST["nome-usuarioo"]) || empty($_POST["senhaaa"])) {
	header("Location: login.html");
	exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST["nome-usuarioo"]);
$senha = mysqli_real_escape_string($conexao, $_POST["senhaaa"]);

$query = "select nome from login where nomeusu = '{$usuario}' and senha = md5('{$senha}')";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row != 1) {
	$_SESSION["nomeusu"] = $usuario;
	header("Location: logado.html");
	exit();
} else {
	header("Location: index.html");
	exit();
}
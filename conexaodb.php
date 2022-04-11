<?php 


$user = 'root';
$pass = '';
$host = 'localhost';
$n_database = 'repositorio';

$conexao = new mysqli($host,$user,$pass,$n_database);

if($conexao->error)
	die("erro ao conectar o banco de dados repositorio".$conexao->error);



?>
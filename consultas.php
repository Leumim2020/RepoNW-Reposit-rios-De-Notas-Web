<?php 

	include('conexaodb.php');

	if(!isset($_SESSION)){session_start();}

	if(isset($_SESSION['senha'])){

		$pass = $_SESSION['senha'];

		$sql = "SELECT `nome` FROM `professores` WHERE `id_professor` = '$pass'";

		$sql_query = $conexao->query($sql) or die("falha na execução da query sql".$conexao->error);


		$user = array();

		// Pegar nome no banco de dados
		$user = $sql_query->fetch_assoc();
		$_SESSION['user'] = $user['nome'];

	}
		

?>
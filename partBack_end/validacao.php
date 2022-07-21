<?php

	include ('conexaodb.php');	


	if(isset($_POST["user"]) && isset($_POST["senha"])){

		$usuario = $_POST["user"];
		$senha = $_POST["senha"];

		if(empty($usuario) && empty($senha)){
			?>
				<script type="text/javascript">alert("usuário e senha não digitados");</script>
			<?php
		}

		if(!empty($usuario) && empty($senha)){
			?>
				<script type="text/javascript">alert("senha não digitada");</script>
			<?php
		}

		if(empty($usuario) && !empty($senha)){
			?>
				<script type="text/javascript">alert("usuaŕio não digitado");</script>
			<?php
		}

		

		if(!empty($usuario) && !empty($senha)){

				if($usuario != "prof"){
					echo "<script type='text/javascript'>alert('nome de usuário está errado');</script>";
				}

			$usuario = $conexao->real_escape_string($_POST["user"]);
			$senha = $conexao->real_escape_string($_POST["senha"]);
		
			if($usuario == "prof"){

				$sql = "SELECT * FROM `professores` WHERE `id_professor` = '$senha'";
				$sql_query = $conexao->query($sql) or die("falha na execução da query sql ".$conexao->error);

				// contado a quantidade de registos na tabela professores
				$qtd_rg = $sql_query->num_rows;

				// se qtd_rg for 1 então professor existe
				if ($qtd_rg == 1){


					// inciando sessão
					if(!isset($_SESSION)){
						session_start();
					}
					// sessão

					$_SESSION['senha'] = $senha;
					$_SESSION['nome'] = $usuario;

					// direcionando professor para caderneta

					header("Location:indexprof.php");

					
				}else{
					echo "<script type='text/javascript'>alert('senha incorreta');</script>";
				}
				

			}


		}

	}

?>
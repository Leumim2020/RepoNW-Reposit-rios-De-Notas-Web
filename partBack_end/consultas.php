<?php 

	include('sessao.php');
	
	

	function search_register1(){

		include('conexaodb.php');

		$pass = $_SESSION['senha'];

		$sql = "SELECT `curso_id`,`turma_id` FROM `turmas` WHERE `professor_id` = '$pass'";
		$sql_qery = $conexao->query($sql) or die("falha na execução da query sql".$conexao->error);
		return $sql_qery;
	}

	function search_nameuser(){

		include('conexaodb.php');

		$pass = $_SESSION['senha'];

		$sql = "SELECT `nome` FROM `professores` WHERE `id_professor` = '$pass'";
		$sql_qery = $conexao->query($sql) or die("falha na execução da query sql".$conexao->error);
		$name = $sql_qery->fetch_assoc();
		
		return $name['nome'];
		 

	}

	function search_discipline(){

		include('conexaodb.php');

		$pass = $_SESSION['senha'];
		$curso = $_SESSION['curso'];
		$turma = $_SESSION['turma'];

		$sql = "SELECT `disciplina_id` FROM `disciplina_cursos` WHERE `professor_id`  = '$pass' AND `turma_id` = '$turma' AND `curso_id` = '$curso'";

		$sql_qery = $conexao->query($sql) or die("falha na execução da query sql".$conexao->error);
		
		return $sql_qery;
		
	}

	function search_student(){

		include('conexaodb.php');

		$curso = $_SESSION['curso'];
		$turma = $_SESSION['turma'];


		$sql = "SELECT `nome` FROM `alunos` WHERE `curso_id`  = '$curso' AND `turma_id` = '$turma'";

		$sql_qery = $conexao->query($sql) or die("falha na execução da query sql".$conexao->error);
		
		return $sql_qery;
	}

	function valuesStandardOfNote(){

		?>
			
				<select name="nota" style="border: none;">
					<?php 
						$i = 0; 
						while($i <= 20) : ?>
						<option><?php echo $i;?></option>
					<?php $i++; endwhile; ?>
				</select>
	
		<?php
	}
	

?>

<?php


	include('sessao.php');
	include('consultas.php');

?>
<!doctype html>
<html lang="pt-br">
  <head>
  	<title>Reponw</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
	
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" type="text/css" href=css/style1.css>
	<link rel="stylesheet" type="text/css" href="css/templateTb.css">
	
	</head>
<body>
	<div id="colorlib-page">
		
		<aside id="colorlib-aside" role="complementary" class="js-fullheight">

			<div class="flex-shrink-0 p-3 bg-white" style="">

   		 	<a class="d-flex align-items-center pb-2 mb-2 link-dark text-decoration-none border-bottom"> 
   		 		<span style="font-size: 20px;">Professor: 
   		 			<?php
   		 			 	
   		 			 	$nome = search_nameuser();
						echo $nome;   		 			
					?>	
   		 		</span> 
    		</a>

    <ul class="list-unstyled ps-0">
      		<li class="mb-1"> <p class="align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="false" _msthash="1079117" _msttexthash="42250" style="font-size: 25px;">Cadernetas</p>
        	<div class="collapse" id="home-collapse" style="">
          		<ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            		<li style="padding-left: 15px;"><a href="consulta1.php" class="rounded" style="font-size: 25px;"> # <img src="../imagens/edit.png" style="width: 30px;"></a></li>
            		<li style="padding-left: 15px;"><a href="#" class="rounded" style="font-size: 25px;"> #<img src="../imagens/view.png" style="width: 30px;"></a></li>
            		<br><br><br><br><br><br>
         		 </ul>
       		 </div>
      		</li>
   	 </ul>
    	<a class="color" href="indexprofcadv.php?c_id=<?php $id = $_SESSION['curso']; echo $id;?>&t_id=<?php $id = $_SESSION['turma']; echo $id; ?>" style="font-size: 25px;"><img src="../imagens/arrow.png" style="width: 30px;"></a>
  </div>
		</aside> <!-- END COLORLIB-ASIDE -->

		<div id="colorlib-main">
			<section class="ftco-section pt-4 mb-5 ftco-intro">
				<div class="container-fluid px-3 px-md-0">
					<h6 class="border" style="font-size: 20px;"> 
						<table class="">
							<thead class="thead-primary">
						    	<tr>
						    		<th>Curso: </th>
						      		<th>
						      			<?php 
						      				 echo $_SESSION['curso']; 
						      			?>
						      					
						      		</th>
						      		<th style="color: white;">Curso e Turmas</th>
						      		<th>Turma: </th>
						      		<th>
						      			<?php 
						      				 echo $_SESSION['turma']; 
						      			?>
						      				
						      		</th>
						      		<th style="color:white;">Cursos e Turmas</th>
						      		<th>Disciplina: 	
						      			<?php 
						      				$discipline = $_GET['d_id'];
						      				echo $discipline;
						      			?>
						      				
						      		</th>
						    	</tr>
							</thead>
						</table>
						</h6>
				
				</div>
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="table-wrapper-scroll-y ">
								<table class="table table-striped  table-bordered table-sm">
						  			<thead class="thead-primary">
									    <tr>
									      <th>Nº</th>
									      <th>Nome</th>
									      <th>PP1</th>
									      <th>MAC1</th>
									      <th>PT1</th>
									      <th>MT1</th>
									      <!--First trimestre-->
									      <th>PP2</th>
									      <th>MAC2</th>
									      <th>PT2</th>
									      <th>MT2</th>
									      <!--second trimestre-->
									      <th>PP3</th>
									      <th>MAC3</th>
									      <th>PT3</th>
									      <th>MT3</th>
						      			<!--third trimestre-->
									    </tr>
						  			</thead>
									<tbody class="td-body">
						  				<?php 
									 		$query = search_student();
									 		$numero = 0;
									 		while($row = $query->fetch_assoc()) : $numero++; ?>
									 			<!--code html-->
									 			<form method="post" action="viewn.php">
									 			<tr>
									 				<td><?php echo $numero;?></td>
									 				<td><?php echo $row['nome'];?></td>
									 				<!-- begin of first trimestre-->
									 				<td><?php valuesStandardOfNote();?></td>
									 				<td><?php valuesStandardOfNote();?></td>
									 				<td><?php valuesStandardOfNote();?></td>
									 				<td><?php valuesStandardOfNote();?></td>
									 				<!--end first trimestre -->
									 				<!-- begin of second trimestre-->
									 				<td><?php valuesStandardOfNote();?></td>
									 				<td><?php valuesStandardOfNote();?></td>
									 				<td><?php valuesStandardOfNote();?></td>
									 				<td><?php valuesStandardOfNote();?></td>
									 				<!-- end second trimestre -->
									 				<!-- begin of third trimestre-->
									 				<td><?php valuesStandardOfNote();?></td>
									 				<td><?php valuesStandardOfNote();?></td>
									 				<td><?php valuesStandardOfNote();?></td>
									 				<td><?php valuesStandardOfNote();?></td>
									 				<!-- end third trimestre -->

									 				<td>
									 				<a href="#">
														<img src="../imagens/edit.png" style="width: 20px;">
													</a>
												</td>
								  			</tr>
									 			<!--code html-->
									 		<?php endwhile; ?>
									</tbody>
								</table>
							</div>
							      <tr><button type="submit">salvar</button></tr>
							  </form>
						</div>
					</div>
				</div>
			</section>
		</div><!-- END COLORLIB-MAIN -->

<!-- Tabela--->


		
	
<!--Fim da tabela Cursos-->

	</div><!-- END COLORLIB-PAGE -->

	</section>

  <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
  <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
  <script src="sidebars.js"></script>
  <script src="js/templateTable.js"></script>

</body>
</html>

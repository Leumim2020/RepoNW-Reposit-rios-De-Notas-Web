<?php include ('sessao.php');include('consultas.php');?>
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

	<style type="text/css">
		#colorlib-main .row .col-md-12 .table-wrap .table .td-body td a img:hover{
			background: #80808021; 
			
		}
	</style>
	</head>
	<body>
	<div id="colorlib-page">
		
		<aside id="colorlib-aside" role="complementary" class="js-fullheight">

			<div class="flex-shrink-0 p-3 bg-white" style="">

   		 	<a class="d-flex align-items-center pb-2 mb-2 link-dark text-decoration-none border-bottom"> 
   		 		<span style="font-size: 30px;">Professor</span> 
    		</a>

    <ul class="list-unstyled ps-0">
      		<li class="mb-1"> <p class="align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="false" _msthash="1079117" _msttexthash="42250" style="font-size: 25px;">Cadernetas</p>
        	<div class="collapse" id="home-collapse" style="">
          		<ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            		<li style="padding-left: 15px;"><a href="consulta1.php" class="rounded" style="font-size: 25px;"># <img src="../imagens/edit.png" style="width: 30px;"></a></li>
            		<li style="padding-left: 15px;"><a href="#" class="rounded" style="font-size: 25px;"># <img src="../imagens/view.png" style="width: 30px;"></a></li>
            		<br><br><br><br><br><br>
         		 </ul>
       		 </div>
      		</li>
   	 </ul>
    	<a class="color" href="indexprof.php" style="font-size: 25px;"><img src="../imagens/arrow.png" style="width: 30px;"></a>
  </div>
		</aside> <!-- END COLORLIB-ASIDE -->

		<div id="colorlib-main">
			<section class="ftco-section pt-4 mb-5 ftco-intro">
				<div class="container-fluid px-3 px-md-0">
					<h6 class="border" style="font-size: 20px;">
						<?php 	
							$nome = search_nameuser();
							echo $nome;
						?>
							
					</h6>
				</div>
				<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table">
						  <thead class="thead-primary">
						    <tr>
						      <th>Nome do Curso</th>
						      <th>Turma</th>
						    </tr>
						  </thead>
						  <tbody class="td-body">
						  	<?php 
						  	 	$query = search_register1(); 

						  		while($row = $query->fetch_assoc()) : ?>
						    		<tr>
						      			<td><?php echo $row['curso_id']; ?></td>
						      			<td><?php echo $row['turma_id']; ?></td>
						      			<td><a href="indexprofcadv.php?c_id=<?php  echo $row['curso_id']; ?>&t_id=<?php  echo $row['turma_id']; ?>"><img src="../imagens/view.png" style="width: 30px;"></a></td>
						    		</tr>
							<?php endwhile; ?>
						  </tbody>
						</table>
					</div>
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

	</body>
</html>


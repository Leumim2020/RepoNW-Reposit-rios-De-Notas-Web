
<?php 
	include('validacao.php');
	
	session_start();

	if(isset($_SESSION['alert'])){
		echo "<script type='text/javascript'>alert('sessão não foi efetuada');</script>";
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>RepoNW</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<!------------formulário de login----------->
				<form class="login100-form validate-form" action="" method="POST">
					<span class="login100-form-title p-b-26">
						Repo<span id="nw">NW</span>
					</span>
					<span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
					</span>
						<div class="wrap-input100">
						<input class="input100" type="text" name="user" data-validate="entre usuário" maxlength="4" placeholder="usuário">
						</div>

						<div class="wrap-input100 validate-input" data-validate="entre senha">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
					
						<input class="input100" type="password" name="senha" maxlength="6" placeholder="senha" >
					</div>

					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="d-grid gap-2 col-6 mx-auto">
  								<button style="padding: 15px 30px;" type="submit" class="btn btn-outline-primary">inicie sessão</button>
							</div>
						</div>
					</div>

				</form>
				<!------------fim formulário de login----------->
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
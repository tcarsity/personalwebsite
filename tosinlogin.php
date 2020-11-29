<?php
if(!empty($_POST)){
	

require('tosinclass.php');

 $tosin = new Tosin();

$tosin->login($_SESSION['user']);

}
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/all.css">
	<meta name="author" content="Tosin Olarewaju">
	<meta name="keywords" content="tcarsity, Information Technology, the best tech">
	<meta name="description" content="Nigeria, Lagos, tcarsity">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<style type="text/css">
		/*internal css styling*/
		 body{
			background-image:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url(JUQM7463.JPG);
			background-size: cover;
			background-position: center;
			}

		/*media query/responsiveness*/
	

		@media screen and (max-width: 540px) {


			.fff div{
				font-size:11px;
			}
			.sss div{
				font-size:11px;
			}
		
		}


	</style>
	

</head>
<body>


	<a href="tosinweb.php" style="color:white; text-decoration:none">Home Page</a>

	<!-- Admin login form -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-md" align="center" style="margin-top:30px">
				<div class="card" style="background-color:rgba(0,0,0,0.4); width:40%;">
					<div class="card-body">
						<form action="tosin_action.php" method="post" class="form-vertical">
							
							<div class="form-group row fff">
								<div class="col-md-5" style="color:white">Username</div>
								<div class="col-md-7">
								<input type="text" name="username" class="form-control" required>
								</div>
							</div>


							<div class="form-group row sss">
								<div class="col-md-5" style="color:white">Password</div>
								<div class="col-md-7">
								<input type="password" name="pwd" class="form-control" required>
								</div>
							</div>

							<button type="submit" class="btn btn-success" style="width:100%">Login</button>


						</form>
					</div>
				</div>
			</div>
		</div>



	</div>



















</body>
</html>
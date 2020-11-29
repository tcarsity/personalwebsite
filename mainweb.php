<?php
if(empty($_POST)){
require('tosinclass.php');

$tosin = new Tosin();

$deets = $tosin->get_message();

if($_SESSION['user']){
	echo "Welcome user" .'. '. 'Olarewaju Tosin';
}
else{
	header("location:tosinlogin.php");
}

}

?>





<!DOCTYPE html>
<html lang="en">
<head>
	<title>Main Site</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/all.css">
	<meta name="author" content="Tosin Olarewaju">
	<meta name="keywords" content="tcarsity, Information Technology, the best tech">
	<meta name="description" content="Nigeria, Lagos, tcarsity">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<style type="text/css">
		/*internal css styling*/
			.header{
				background-image:linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url(JUQM7463.JPG);
				background-size: cover;
				background-repeat: no-repeat;
				height:80px;
			}



	</style>

</head>
<body>

	<!-- header/banner -->
	<div class="container-fluid">
		<div class="row  header">
			<div class="col-md">
				<h3 style="font-family:Cooper Black; font-size:33px; color:white">Tcarsity<span style="color:rgb(0,119,300)">tech</span></h3>
			</div>

			<div class="col-md" align="right">
				
      
     
       			 <a href="logout.php" style="color:white; text-decoration:none">Logout</a>
      
     
     
    
		</div>
  </div>

  

		<?php
			foreach ($deets as $val) {
				
			


		?>


		<div class="container">
			
			<div class="row">
				<div class="col-md">
					<p><b>Name:</b> <?php echo $val['fullname']?></p>
				</div>
				<div class="col-md">
					<p><b>Email:</b> <?php echo $val['email']?></p>
				</div>
			</div>

			<div class="row">
				<div class="col-md">
					<p><b>Message:</b> <?php echo $val['message']?></p>
				</div>
				<div class="col-md">
					<p><b>Date:</b> <?php echo $val['date_time']?></p>
						
					</div>
			</div>
		</div>

		<hr style='color:black; border:1px solid grey'>

      <div id='feedback'> 
       <?php
      }
      ?>
   
      </div>


     
</div>

</body>
</html>
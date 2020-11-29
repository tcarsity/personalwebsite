<?php

require('tosinclass.php');

$tosin = new Tosin();


		
	
	 
?>
	

	<!-- OOP form validation and saving to database -->
<?php

	if(!isset($full_name)){
		$full_name = '';
	}

	if(!isset($email)){
		$email = '';
	}


		$full_name = filter_input(INPUT_POST, 'fullname');
		 $email = filter_input(INPUT_POST, 'email');
		 $message = filter_input(INPUT_POST, 'mess');


	
	 


	if(isset($_POST['submit'])){

	

		if(empty($full_name)){
			$name_error = 'please fullname cannot be empty';
		}
		else{
			if(strlen($full_name) < 6) {
				$name_error = 'Please your fullname needs to be a maximum of 6 letters';
				}
			}




	if(empty($email)) {

		$email_error = 'please email cannot be empty';
	}
	else{
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {

		$email_error = 'please email must be a valid email';
		
		}
	}
	


	if(empty($message)){
		$message_error = 'please message cannot be empty';
	}
	else{
			if(!isset($name_error) && !isset($email_error) && !isset($message_error)){
				$tosin->insert_message($full_name, $email, $message);
				echo "<div class='alert alert-success' style='text-align:center;'><b>Message Sent Successfully... Thank You!</b></div>";
				
				}

			
			
		}
			
				
		
			if(isset($name_error) OR isset($email_error) OR isset($message_error)){
				echo "<div class='alert alert-danger' style='text-align:center;'><b>Please Fill The Form Properly... Thank You!</b></div>";
				}

}

?>


	

	
<!DOCTYPE html>
<html lang="english">
<head>
	<title>Personal Website</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/all.css">
	<link rel="stylesheet" type="text/css" href="animate.css">
	<meta name="author" content="Tosin Olarewaju">
	<meta name="keywords" content="tcarsity, Information Technology, the best tech">
	<meta name="description" content="Nigeria, Lagos, tcarsity">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	


<style type="text/css">

 /*internal css styling*/
 
 body{
 	margin:0px;
 	padding:0px;
 	box-sizing: border-box;

 	}

  .first{
  		position:sticky;
  		top:0;
  		bottom:0;
  		right:0;
  		left:0;
  		z-index:1;
  		background-image:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url(JUQM7463.JPG);
		background-repeat: no-repeat;
		background-size: cover;
		background-position: center;
		}




 .second{
 		background-image:linear-gradient(rgba(0,0,0,0.9),rgba(0,0,0,0.9)),url(RDDD1910.jpg);
		background-repeat: no-repeat;
		background-size:cover;
		background-position: center;
		height:550px;
		} 


  .third{
		margin-top:30px;
		}


 .fourth{
		margin-top:30px;
		}


	.pad{
		padding:20px;
	    }

	nav a {
		margin-left:16px;
		font-family: Arial;
		color:rgba(255, 255, 255, 0.35);
		position: relative;
		padding-left:12px;
		}


  nav a:hover{
		max-width:100%;
		transition: all 1.5s ease;
		color:white;
		}

	
	.what{
		text-align:center;
		font-family: Cooper Black;
		margin-top:40px;
		}

	#build{
		background-image:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url(JUQM7463.JPG);
		color:white;
		font-family: consolas;
		}

	#fast{
		background-image:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url(JUQM7463.JPG);
		color:white;
		font-family: consolas;
		}

	#design{
		background-image:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url(JUQM7463.JPG);
		color:white;
		font-family: consolas;
		}

	
	.footer{
		margin-top:50px;
		background-image:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url(JUQM7463.JPG);
		background-repeat: no-repeat;
		background-size: cover;
		background-position: center center;
		}

	
	



	/*media query/responsiveness*/
	
	@media screen and (max-width: 540px) {


		.first h3{
			
			font-size:14px;
		}


		nav a {

			margin-left:16px;
			font-family: Arial;
			color:rgba(255, 255, 255, 0.35);
			position: relative;
			}

		nav a:hover{
			max-width:100%;
			transition: all 1.5s ease;
			color:white;
			}
	
		.second h4{
			font-size:15px;
		}

		
		.what h1{
			font-size:30px;
		}

		
		.footer p{
			font-size:9px;
		}


		.footer span{
			font-size:13px;
		}

		.footer h1{
			font-size:30px;
		}

		.footer a{
			font-size:20px;
		}

		.abt h1{
			font-size:30px;
		}

		.fourth h1{
			font-size:30px;
		}

		.fourth h3{
			font-size:23px;
		}

		
	}
	

</style>

</head>
<body>

	<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
 	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>

 	
<!--  Header/Banner -->
	<div class="container-fluid">
		<div class="row first">
			<div class="col-md">
				 <h3 style="font-family:Cooper Black; font-size:30px; color:white; margin-top:10px">Tcarsity<span style="color:rgb(0,119,300)">tech</span></h3>
			</div>

			<!-- Navbar -->
		<div class="col-md">
			<nav class="navbar navbar-expand-md  background-image:linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url(JUQM7463.JPG);">
 					 <a class="navbar-brand" href="#"></a>
 					 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="background-color:grey;">
   					 <span class="navbar-toggler-icon"></span></button>

 					 <div class="collapse navbar-collapse" id="navbarSupportedContent">
   						 <ul class="navbar-nav mr-auto" style="margin:auto">
    					  <li class="nav-item active">
    					  	 <a class="nav-link" href="#">Home</a>
    					  </li>
    					  <li class="nav-item">
     					  	 <a class="nav-link" href="#Aboutme">About</a>
    					  </li>
      
    					  <li class="nav-item">
     					  	 <a class="nav-link" href="#btn">Contact</a>
     					 </li>

      					 <li class="nav-item">
      						  <a class="nav-link" href="tosinlogin.php" style="color:white;">Login</a>
     					 </li>
     				
    				 </ul>
				</div>
		
			 </nav>
		</div>
 	 </div>

<!-- Background image -->
 	<div class="row second">
 		<div class="col-md">
 			<h4 style="text-align:center; margin-top:200px; font-family: Cooper Black; color:white;" class="animated flipInY">
 				Hi, I'm Tosin. 
 				Full-Stack Software Developer.
 			</h4>
 		</div>
 	</div>

 	<!-- Fetching picture from the database. -->
 	<div class="row third">
 		<div class="col-md pic" align="center">
 			<?php
 				$tosin->getpicture2();
 			?>
 			
 		<!-- Fetching about me content from the database. -->	
 		</div>
 		<div class="col-lg abt">
 			<h1 style="font-family: Cooper Black; text-align: center" id="Aboutme">About Me</h1>
 			
 				<?php
 					$tosin->aboutme();
 				?>
 		</div>
 	</div>

 

 	<div class="row what">
 		<div class="col-md">
 			<h1>What do i do?</h1>
 		</div>
 	</div>



 	<div class="row pad">
 		<div class="col-md">
 			<div class="card" id="build">
 				<div class="card-body">
 					<h5 class="card-header"><i class="fas fa-desktop"></i> I Build.</h5>
 					<div class="card-text">
 						<p>
 							I build development framework and code templates,
 							develop /test features, interactivity, links, functionality.
							Fill with content.
 						</p>
 					</div>
 				</div>
 			</div>
 		</div>


 		<div class="col-md">
 			<div class="card" id="fast">
 				<div class="card-body">
 					<h5 class="card-header"><i class="fab fa-accessible-icon"></i> Fast and Reliability.</h5>
 					<div class="card-text">
 						<p>
 							I'm fast and reliable, I deliver a good and effective website/web application very quickly.
 						</p>
 					</div>
 				</div>
 			</div>
 		</div>
 	

 	
 		<div class="col-md">
 			<div class="card" id="design">
 				<div class="card-body">
 					<h5 class="card-header"><i class="fab fa-creative-commons-remix"></i> I Design.</h5>
 					<div class="card-text">
 						<p>
 							I design user interface and design elements, create mock-ups,
 							review and approval cycle, slide and code valid HTML/CSS.
 						</p>
 					</div>
 				</div>
 			</div>
 		</div>

 		
 	</div>

 	
 	<!-- Technology Skills -->

 	<div class="row fourth">
 		<div class="col-md">
 			<h1 style="font-family:Cooper Black; text-align:center">Technical Skills</h1>

 			<h3>Front-End Technologies</h3>
 			
 				<span>HTML, CSS, Bootstrap</span>
 				 <div class="progress">
 						<div class="progress-bar background-image:linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url(JUQM7463.JPG);" role="progressbar" style="width:99%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
 					99%
 					</div>
 			
 				</div>
 			
 			<br>
 				<span>Javascript, React JS, Jquery</span>
 					<div class="progress">
 						<div class="progress-bar background-image:linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url(JUQM7463.JPG);" role="progressbar" style="width:88%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
 					88%
 					</div>
 			
 				</div>
 			<br>
 			
 				<h3>Back-End Technologies</h3>
 					<span>PHP, OOP, Laravel</span>
 					<div class="progress">
 						<div class="progress-bar background-image:linear-gradient(rgba(0,0,0,0.4),rgba(	0,0,0,0.4)),url(JUQM7463.JPG);" role="progressbar" style="width:90%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
 					89%
 						</div>
 			
 					</div>
 			<br>
 			<span>MySQL Database</span>
 					<div class="progress">
 						<div class="progress-bar background-image:linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url(JUQM7463.JPG);" role="progressbar" style="width:85%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
 					85%
 					</div>
 			
 				</div>
 			<br>
 			<span>AJAX</span>
 			<div class="progress">
 				<div class="progress-bar background-image:linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url(JUQM7463.JPG);" role="progressbar" style="width:80%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
 					80%
 				</div>
 			
 			</div>


 		</div>
 		
 	</div>


 	<!-- how to contact me and footer-->

 	<div class="row footer">
 	   <div class="col-md" align="center" style="padding-top:30px">
					<a href="https://linkedin.com/in/tosin-olarewaju-796b851b2" class="fab fa-linkedin 		fa-3x" style="color:white; padding:15px; text-decoration:none"></a>
 					<a href="https://www.github.com/tcarsity" class="fab fa-github fa-3x" style="color:white; padding:15px;text-decoration:none"></a>
 					<a href="https://www.instagram.com/tosincarsity" class="fab fa-instagram fa-3x" style="color:white; padding:15px;text-decoration:none"></a>
 					<a href="https://www.facebook.com/Tcarsity" class="fab fa-facebook fa-3x" style="color:white; padding:15px;text-decoration:none"></a>
 					<a href="https://www.twitter.com/tosin_olarewaju" class="fab fa-twitter fa-3x" style="color:white; padding:15px;text-decoration:none"></a>
 						
	<h1 id="btn" style="font-family:Cooper Black; color:white; margin-bottom:20px;">Contact Me</h1>
 					
 							<div class="card" style="background-color:rgba(0,0,0,0.4); width:55%;">
 								<div class="card-body">
 					 <form action="" method="post" class="form-vertical" style="padding-bottom:20px">
 										<div class="form-group row">
 							
 											<div class="col-md">
 											  <input type="text" name="fullname" class="form-control" placeholder="Your Fullname" value="<?php echo htmlspecialchars($full_name)?>">
 											</div> 
 											
 									</div>
 								<?php if(isset($name_error)) {?>
 								<p style="color:red"><?php echo $name_error ?></p>
 								<?php }?>	
 									
 							<div class="form-group row">
 							
 									<div class="col-md ">
 									  <input type="text" name="email" class="form-control" placeholder="Your Email" value="<?php echo htmlspecialchars($email)?>">
 										</div> 
 										
 							</div>

 							<?php if(isset($email_error)) {?>
 								<p style="color:red"><?php echo $email_error ?></p>
 								<?php }?>		
 							<div class="form-group row">
 							
 									<div class="col-md">
 									  <textarea maxlength="500" class="form-control" type="text" name="mess" placeholder="Message here" rows="4" value="<?php echo htmlspecialchars($message);?>"></textarea>
 									</div> 
 							</div>
 							<?php if(isset($message_error)) {?>
 								<p style="color:red"><?php echo $message_error ?></p>
 								<?php }?>	
 							
 						<button type="submit" name="submit" value="submit" class="badge badge-pill" id="bott" style="height:30px">Send Message</button>

 					</form>
 						
 					<p style="color:white" ><i class="fas fa-phone"></i> +2349037450867</p>
 					<p style="color:white" ><i class="fas fa-map-marker"></i> Alimosho Lagos, Nigeria</p>
 					<p style="color:white" ><i class="fab fa-instagram"></i> tosincarsity</p>
 					<p style="color:white" ><i class="fas fa-envelope"></i> tosinoluwaseun10@gmail.com</p>
 				</div>
 			</div>

 	
 			
 			<span style="color:white; font-family:Consolas;"> Copyright<i class="fas fa-copyright"></i> Tosin Olarewaju 2020</span>
 			
 	</div>

 	



</div>


	
</div>

<!-- The use of Ajax -->
 <script src="js/jquery-3.5.1.min.js"></script>
<script type="text/javascript">
	
		$('#bott').click(function(){
			var names = $('#fullname').val();
			var email = $('#email').val();
			var message = $('#mess').val();
			var data2send = {'get':names, 'eml':email, 'msg':message};


			$.ajax({
				url:'',
				data: data2send,
				type:'POST',

				success:function(rsp){
					$('#feedback').html(rsp);
					}
				});
			});
	


		
			
				
					
		


</script>








 
</body>
</html>
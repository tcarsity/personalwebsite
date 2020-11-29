<?php

class tosin{ 

	
	public $conn;
	

	 function __construct(){
		session_start();
		$this->conn = new Mysqli("localhost","root","","personalwebsite");
	
		
	}

	 function aboutme(){
		$query = "SELECT * FROM tosin";

		$res = $this->conn->query($query);

		while($about = $res->fetch_assoc()){
			$get = $about['about_me'];
		}	
		 

		$_SESSION['about'] = $get;
		

		echo "<div class='card' style='background-image:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url(JUQM7463.JPG);'>
				<div class='card-body'>
					<div class='card-header'>
					<p style='font-family:consolas; color:white'>$get</p>
					</div>
				</div>
		</div>";

	}

	

	 function getpicture2(){
		$query = "SELECT * FROM tosin";

		$res = $this->conn->query($query);

		while($getpic = $res->fetch_assoc()){
			$picx = $getpic['mypic'];
		}	
		 

		$_SESSION['pic'] = $picx;
		

		echo "<img src ='$picx' class='rounded-circle' style='width:78%'>";

	}

	 function login( $username, $pwd){
		$query = "SELECT * FROM admin_login where username = '$username' and password = '$pwd'";

		$res = $this->conn->query($query);

		if($res->num_rows > 0){
			$get = $res->fetch_assoc();
			$_SESSION['user'] = $get['admin_id'];

			header('location:mainweb.php');
		}
		else{
			header('location:tosinlogin.php');
		}
	}


	 function insert_message($fullname, $email, $message){


		$query ="INSERT INTO contacts (fullname, email, message) VALUES ('".trim(stripslashes(strip_tags(htmlentities(htmlspecialchars($fullname)))))."','".trim(stripslashes(strip_tags(htmlentities(htmlspecialchars($email)))))."', '".trim(addslashes(strip_tags(htmlentities(htmlspecialchars($message)))))."')";
			
			

			$mes = $this->conn->query($query);
			$id = $this->conn->insert_id;


			if($id > 0){
				$_SESSION['mess'] = $id;
			 
				
			}
	}


	 function get_message(){
		$query = "SELECT * FROM contacts";

		$res = $this->conn->query($query);
		$records = array();

		while($result = $res->fetch_assoc()){
			$records[] = $result;
		}
		return $records;
	}


	
	






}














?>
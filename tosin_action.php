<?php

require('tosinclass.php');

$tosin = new Tosin;

$username = $_POST['username'];
$password = $_POST['pwd'];


if(isset($_SESSION['user'])){
	header('location:mainweb.php');
}


$tosin->login($username, $password);



?>
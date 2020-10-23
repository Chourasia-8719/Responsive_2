<?php

try{
	$db=new mysqli("localhost","root","","responsive_1");
}
catch(Exception $exc){
	echo  $exc->getTraceAsString();
}
if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['address']) && isset($_POST['message'])){
	$username=$_POST['username'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$message=$_POST['message'];

$insert_db = $db->query("INSERT INTO `contact_form` (`username`, `email`, `phone`, `address`, `message`) values ('$username','$email','$phone','$address','$message')");

	if($insert_db == TRUE){
			echo "<h1> Thanks for sharing data with us</h1>";
			header("Location:index.php");
			exit();
			}
}


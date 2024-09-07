<?php 

	$host= "";
	$pass = "";
	$user = "";
	$db = "";

	$con = mysqli_connect($host,$pass,$user,$db);


		$name = $_POST['name'];
	$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
	if($con){
	
		$qru = "INSERT INTO tabl (`name`,`email`,`subject`,`message`) VALUES($name,$email,$subject,			$message)";


		$res = mysqli_query($con,$qru);

		if($res){
			
			header("Location: inquery.html");
		}else{
			header("Location: inquery.html");
		}
	}else{
		die("connect no");
	}

?>
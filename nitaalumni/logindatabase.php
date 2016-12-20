<?php
    session_start()  ;
	$email = $_POST['username'];
	$password = $_POST['password'];
	$con = new PDO("mysql:host=localhost;dbname=nita","root","");
	$sql = "select email from register";
	$res =$con->query($sql);
	$array1 =[];
	while($data = $res->fetch())
		$array1[]=$data[0];
	if(in_array($email,$array1))
	{
	$sql = "select password from register where email= '".$email."'";
	$res =$con->query($sql);
	$data = $res->fetch();
	if($data[0]==$password){
		$_SESSION['email'] = $email;
		header("location: index.php");
	}
	else
		header("location: login.php");	
	}
	else
		header("location: login.php");
	
?>
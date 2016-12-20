<?php
 error_reporting(0);
	$head=$_POST["head"];
	$msg=$_POST["msg"];
	$conn=new PDO("mysql:host=localhost;dbname=nita","root","") or die("failed");
	
	$stmt = $conn->prepare("INSERT INTO invite (head,msg) VALUES (?,?)");
	$stmt->bindParam(1,$head);
	$stmt->bindParam(2,$msg);
	$stmt->execute();
	if($stmt)
		echo header("location:index.php");
	else
	echo "unsuccessfully store data in database";

?>
<?php
 error_reporting(0);
	$email=$_POST["email"];
	$fname=$_POST["fname"];
	$lname=$_POST["lname"];
	$department=$_POST["department"];
	$passout=$_POST["passout"];
	$mnumber=$_POST["mnumber"];
	$password=$_POST["password"];
	$company=$_POST["company"];
	$location=$_POST["location"];
	//$imgname=$_FILES["image1212"]["name"];
	$image= fopen($_FILES['image1212']['tmp_name'], 'rb');
	$conn=new PDO("mysql:host=localhost;dbname=nita","root","") or die("failed");
	$stmt = $conn->prepare("INSERT INTO register (email,fname,lname,department,passout,mnumber,password,company,location,image) VALUES (?,?,?,?,?,?,?,?,?,?)");
	$stmt->bindParam(1,$email);
	$stmt->bindParam(2,$fname);
	$stmt->bindParam(3,$lname);
	$stmt->bindParam(4,$department);
	$stmt->bindParam(5,$passout);
	$stmt->bindParam(6,$mnumber);
	$stmt->bindParam(7,$password);
	$stmt->bindParam(8,$company);
	$stmt->bindParam(9,$location);
	$stmt->bindParam(10,$image,PDO::PARAM_LOB);
	$stmt->execute();
	if($stmt)
		echo header("location:index.php");
	else
	echo "unsuccessfully store data in database";

?>
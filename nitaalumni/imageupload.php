<?php
   $descp=$_POST["descp"];
	//$imgname=$_FILES["image"]["name"];
	$image= fopen($_FILES['image']['tmp_name'], 'rb');
	$con = new PDO("mysql:host=localhost;dbname=nita","root","");
	$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$stmt = $con->prepare("INSERT INTO gallery (descp ,image) VALUES (? ,?)");
	$stmt->bindParam(1,$descp);
	$stmt->bindParam(2,$image,PDO::PARAM_LOB);
	$stmt->execute();
	if($stmt){
		echo "unsuccessfully store data in database";
		echo header("location: addimg.php");
	}
	else
		echo "unsuccessfully store data in database";
?>
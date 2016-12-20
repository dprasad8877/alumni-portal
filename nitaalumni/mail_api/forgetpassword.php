<?php
$mob = $_POST["mobile"];
$password = $_POST["password"];
$con = new PDO("mysql:host=localhost;dbname=post","root","");
$sql ="update login set password = ".$password." where mobile_no='".$mob."'";
$res=$con->query($sql);
$res->execute();
?>
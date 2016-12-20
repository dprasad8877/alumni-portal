<?php
echo $_POST['head']."  ".$_POST['msg'];
$conn=new PDO("mysql:host=localhost;dbname=nita","root","") or die("failed");
$sql = "select email from register";
$res =$conn->query($sql);
while($data=$res->fetch())
	echo $data[0]."  ";
?>
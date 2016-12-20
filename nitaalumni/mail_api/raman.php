<?php
echo $_POST['head']."  ".$_POST['msg'];
$conn=new PDO("mysql:host=localhost;dbname=nita","root","") or die("failed");
?>
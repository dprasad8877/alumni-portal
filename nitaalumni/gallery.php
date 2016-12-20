<?php
//$image_id = filter_input(INPUT_GET, "image_id", FILTER_SANITIZE_NUMBER_INT);
$con = new PDO("mysql:host=localhost;dbname=nita","root","");
$sql ="select * from gallery";
$stmt = $con->prepare($sql);
$stmt->execute();
while($data=$stmt->fetch()){
 echo '<div class="img22">
	<div class="img">
    <img src="data:image/jpeg;base64,'. base64_encode($data['img']) .'"  width="80" height="100"></div>
    <div class="desc"> '.$data['description'].'</div>
</div>';
	//echo '<img src="data:image/jpeg;base64,'.base64_encode($data['image'])."'/>';
	//echo '<img style="width:220;height:200" src="data:image/jpeg;base64,'. base64_encode($data['image']) .'" />'.'- Name: '.$data['fname'] .'&nbsp' .$data['lname'].'<br>'.'email: ' .$data['email'].'<br>';
	}
//header("Content-type: ".$data["fname"]);
//echo $data["image"];
?>
<!DOCTYPE html>
<html>
<head>

</head>
<body>
<style>
div.img22{
	background-color:gray;
    margin: 10px;
    padding: 0px;
    border: 2px solid #0000ff;
    height: auto;
    width: auto;
	float:left;
}
div.img{
	
	background-color:gray;
    margin: 10px;
    padding: 0px;
    border: 2px solid #0000ff;
    height: auto;
    width: auto;
	float:left;
    text-align: top;
}

div.desc {
	padding: 0px;
    border: 2px gray;
    text-align: left;
    font-weight: normal;
	display:black-inline;
	background-color: #e0ffff;
    width: auto;
	float:left;
    margin: 5px;
}
</style>

</body>
</html>
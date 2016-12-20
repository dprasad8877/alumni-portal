
<?php

error_reporting(0);
session_start();// Starting Session
     $con=new PDO("mysql:host=localhost;dbname=nita","root","");
	        
		?>
<!DOCTYPE html >
<html lang="en">
<head>
<title>NITA Alumni portal</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Your description">
<meta name="keywords" content="Your keywords">
<meta name="author" content="Your name">


<link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/bootstrap-responsive.css" type="text/css" media="screen">    
<link rel="stylesheet" href="styles.css" type="text/css" media="screen">

<script type="text/javascript" src="js/jquery.js"></script>  
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/superfish.js"></script>

<script type="text/javascript" src="js/jquery.ui.totop.js"></script>
<script>
$(document).ready(function() {
	// 


}); //
$(window).load(function() {
	//

}); //
</script>		

</head>

<body class="subpage">
<div id="main">

<header>
<div class="top1">
<div class="container">
<div class="row">
<div class="span12">
<div class="top1_inner clearfix">
	<div class="logo_wrapper"><a href="index.php" class="logo">NITA ALUMNI</a></div>	
</div>	
</div>	
</div>	
</div>
</div>	
<div class="top2">
<div class="menu_wrapper">
<div class="container">
<div class="row">
<div class="span12">
<div class="navbar navbar_">
	<div class="navbar-inner navbar-inner_">
		<a class="btn btn-navbar btn-navbar_" data-toggle="collapse" data-target=".nav-collapse_">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>		</a>
		<div class="nav-collapse nav-collapse_ collapse">
			<ul class="nav sf-menu clearfix">
				<li  class="active"><a href="index.php">Home</a></li>
				<li><a href="members.php"> View Members</a></li>
				<li class="sub-menu sub-menu-1"><a href="gallary.php">Gallery<em></em></a>
					<ul>
						<li><a href="gallary.php">View Images</a></li>
						<li><a href="addimg.php">Add new images</a></li>
					</ul>	

				</li>
				<li class="sub-menu sub-menu-1"><a href="event.php">Event/News<em></em></a>
					<ul>
						<li><a href="event.php">View Events/News</a></li>
						<li><a href="post_event.php">Post Event</a></li>
						<?php
							session_start();
							if($_SESSION['email']=='diwakarp74@gmail.com')
							echo '<li><a href="invitation.php">Send Invitation</a></li>';	
						?>
												
					</ul>						
				</li>				
				<li><a href="contact.php">Contact us</a></li>				
			<li  class="sub-menu sub-menu-1" id = "logout"> <em></em>
		 <?php  $txt = $_SESSION['email'];   
			if(isset($_SESSION['email'])) {
				
				  echo "<li> <h4><font color='red'>Welcome<br>$txt </font></h4>";
				    echo"<li><a href='logout.php'>Logout</a> <li>";
				  }
			else
			{
				
				echo " <li><a href='login.php'>Login</a></li>";
			    echo "<li ><a  href='register.php'>Sign Up</a></li> ";
	
			}
			?> 												
    		</ul>
		</div>
	</div>
</div>	
</div>	
</div>	
</div>	
</div>

</div>
</header>	


<div class="container">
<div class="row">
	<div class="span6" style="padding-left:20;width:200;background-color:orange;background-image: url(1.jpg);">	<center>	
	<marquee behavior="scroll" style="padding-left:20"  width=450 height=500 direction=UP  onmouseover="this.stop();" onmouseout="this.start();"> <?php 
	$con = new PDO("mysql:host=localhost;dbname=nita","root","");
$sql ="select * from event";
$stmt = $con->query($sql);
while($data=$stmt->fetch()){
	echo '<font align="left" size=6>'.$data[1].'<br>'.'</font>'.'<br>';
	echo '<font size=3>'.$data[2].'</font>'.'<hr>';
}
	?> </marquee></center>

	</div>	
	
	<div class="span4" style="float:right">
		<h3>Categories</h3>
		<div class="box1">
			<div class="inner">
				<ul class="ul_cat">
				  <?php
				if(isset($_SESSION['email']))
					{
					echo'<li> <a href="event.php">News and Events</a></li>';}
					else{
						echo'<li> <a href="#">News and Events</a></li>';
					}
					?>
		          
			<?php
				if(isset($_SESSION['email']))
					{
					echo'<li> <a href="gallary.php">Gallery</a></li>';}
					else{
						echo'<li> <a href="#">Gallery</a></li>';
					}
					?>
		      	<?php
				if(isset($_SESSION['email']))
					{
					echo'<li> <a href="members.php">Members</a></li>';}
					else{
						echo'<li> <a href="#">Members</a></li>';
					}
					?>
				<?php
				if(isset($_SESSION['email']))
					{
					echo'<li> <a href="addimg.php">Add New Image</a></li>';}
					else{
						echo'<li> <a href="#">Add New Image</a></li>';
					}
					?>
				<?php
				if(isset($_SESSION['email']))
					{
					echo'<li> <a href="post_event.php">Post Event</a></li>';}
					else{
						echo'<li> <a href="#">Post Event</a></li>';
					}
					?> 
		          <li><a href="contact.php">Contact us </a></li>  
                                                                     
		        </ul>
			</div>

		</div>


		</div>
	</div>
</div>	
</div>


<footer>
<div class="bot1">
<div class="container">
<div class="row">
<div class="span3">

	<div class="block_title">Links</div>

	<ul class="ul0">
	  <li><a href="http://www.nita.ac.in/">NITA main website</a></li>
	  <li><a href="index.php">NITA alumni web portal</a></li>
	  <li><a href="#"></a></li>                                                                              
	</ul>

</div>	
<div class="span3">

	<div class="block_title">Recent News</div>

	<ul class="ul0"> <li><a href="#">upcoming reunion</a></li>
	  <li><a href="#">letest news</a></li>                                                                         
	</ul>

</div>	
<div class="span3">

	<div class="block_title">Find us on:</div>

	<ul class="ul_social">
	  <li><a href="#"><img src="images/fb.jpg" alt="" class="img"><span>Facebook</span></a></li>
	  <li><a href="#"><img src="images/google+.jpg"  alt="" class="img"><span>google+</span></a></li>
	</ul>

</div>	
<div class="span3">

	<div class="block_title">Information</div>

	<p class="txt">
		<a href="index.php" class="color2">This web portal keeps the information about passout students of NIT agartala</a>
		
	</p>

</div>	
</div>	
</div>
</div>	

	
    <!-- do not delete--><div class="webdesign"><a class="mycode" href="http://www.myfreecsstemplates.com"></a></div><!-- end --></div>

</footer>
	
</div>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>

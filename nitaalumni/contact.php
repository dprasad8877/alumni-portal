<?php

error_reporting(0);
session_start();// Starting Session
     $con=new PDO("mysql:host=localhost;dbname=nita","root","");
	        
		?>
<!DOCTYPE html>

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
				<li ><a href="index.php">Home</a></li>
				<?php
				if(isset($_SESSION['email']))
					{
					echo'<li> <a href="members.php">View Members</a></li>';}
					else{
						echo'<li> <a href="#">View Members</a></li>';
					}
					?>
					<?php
				if(isset($_SESSION['email']))
					{
				echo'<li class="sub-menu sub-menu-1"><a href="gallary.php">Gallery<em></em></a>
					<ul>
						<li><a href="gallary.php">View Images</a></li>
						<li><a href="addimg.php">Add new images</a></li>
					</ul>	

					</li>';}
					else{
						echo'<li> <a href="#">Gallery</a></li>';
					}
					?>
				<?php
				if(isset($_SESSION['email']))
					{				
				echo'<li class="sub-menu sub-menu-1"><a href="event.php">Event/News<em></em></a>
					<ul>
						<li><a href="event.php">View Events/News</a></li>
						<li><a href="post_event.php">Post Event</a></li>';
												?><?php
							session_start();
							if($_SESSION['email']=='diwakarp74@gmail.com')
							echo '<li><a href="invitation.php">Send Invitation</a></li>';	
							
						
												
					echo "</ul>	</li>";}
					else{
						echo'<li> <a href="#">Event/News</a></li>';
					}
					?>	
				<li class="active"><a href="contact.php">Contact us</a></li>				
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

 <div id="content">
<div class="container">
<div class="row">
	<div class="span8">		

		<h1>Contact Address</h1>

		<img src="contact.jpg" align="centre"/>

		<h3>contact us</h3>
			<p><b>Address: </b>&nbsp &nbsp
	National Institute of Technology, Agartala
	<br>P.O.: Former Tripura Engineering College <br>
	Barjala, Jirania, TRIPURA (W) <br>
	Pin: 799046</p>
	<p><a href="https://www.google.co.in/maps/@23.8414836,91.4220961,16z?hl=en"> Map and driving directions to NITA campus</a></p>
<p><b>Office of Director</b><br>
Contact: :&nbsp &nbsp
Phone: 0381 2546630 ||
Fax: 0381-2346360</p>
	<p><b>Office of Dean Academic</b><br>
	Contact :&nbsp &nbsp
	Phone: 0381-2348537 (O), 0381-2348510 (O) ||
	Fax: 0381-2348512, 0381-2346360</p>
	<p><b>Office of Registrar</b><br>
	Contact :&nbsp &nbsp
	Phone: 0381 2346629 (O)||
	Fax: 0381-2348512</p>

</p>
		<br />
	        </p>
			
		<h2>Contact Form</h2>

<div id="note"></div>
<div id="fields">
	<form method="POST" id="ajax-contact-form" class="form-horizontal" enctype="multipart/form-data" action="contactdatabase.php">
		<div class="row">
			<div class="span4">
				<div class="control-group">
				    <label class="control-label" for="inputName">Your full name:</label>
				    <div class="controls">				      
				      <input class="span4" type="text" id="inputName" name="name" value="Your full name:" onBlur="if(this.value=='') this.value='Your full name:'" onFocus="if(this.value =='Your full name:' ) this.value=''">
				    </div>
				</div>
				<div class="control-group">
				    <label class="control-label" for="inputEmail">Your email:</label>
				    <div class="controls">				      
				      <input class="span4" type="text" id="inputEmail" name="email" value="Your email:" onBlur="if(this.value=='') this.value='Your email:'" onFocus="if(this.value =='Your email:' ) this.value=''">
				    </div>
				</div>
				<div class="control-group">
				    <label class="control-label" for="inputPhone">Phone number:</label>
				    <div class="controls">				      
				      <input class="span4" type="text" id="inputPhone" name="phone" value="Phone number:" onBlur="if(this.value=='') this.value='Phone number:'" onFocus="if(this.value =='Phone number:' ) this.value=''">
				    </div>
				</div>
			</div>
			<div class="span4">
				<div class="control-group">
				    <label class="control-label" for="inputMessage">Message:</label>
				    <div class="controls">				      				      
				      <textarea class="span4" id="inputMessage" name="message" onBlur="if(this.value=='') this.value='Message:'" 
                        onFocus="if(this.value =='Message:' ) this.value=''">Message:</textarea>
				    </div>
				</div>
			</div>
		</div>
		
		<button type="submit" class="submit">submit<em></em></button>
	</form>
</div>
		

	</div>	
	<div class="span4">
		<h3>Categories</h3>
		<div class="box1">
			<div class="inner">
				<ul class="ul_cat">
				<li> <a href="event.php">News and Events</a></li>         
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
			<div class="shadow"></div>
		</div>

			<div class="shadow"></div>
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

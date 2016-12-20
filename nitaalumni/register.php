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
				<li><a href="index.php">Home</a></li>
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
						<li><a href="post_event.php">Post Event</a></li>
						<li><a href="invitation.php">Send Invitation</a></li>
						
												
					</ul>						
					</li>';}
					else{
						echo'<li> <a href="#">Event/News</a></li>';
					}
					?>
				<li><a href="contact.php">Contact us</a></li>				
				<li><a href="login.php">login</a></li>
				<li class="active"><a href="register.php">register</a></li>												
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
<table class="profile" width="620" border="0" align="center" cellpadding="0" cellspacing="0">
				<tbody><tr>
			  		<td colspan="2"><h2>ACCOUNT DETAILS</h2></td>
				</tr>
				<form method="POST" name="register" id="register" enctype="multipart/form-data"  action="registerdatabase.php">
				<tr>
     <div class="row-fluid email">
      <div class="col-xs-12 col-sm-6">
	  <tr><td>E-mail:</td>

        <!-- for show -->
            <td><input type="email" name="email"placeholder="email"align= "right"required="required "/></td><br>
            <span class="user_form_help_text"></span>
          
        </tr>
      </div>
    </div>
 <!-- <div></div> -->
<div class="row-fluid firstname">
      <div class="col-xs-12 col-sm-6">
	 <tr> <td>First name:</td> &nbsp; <td><input type="text"placeholder="first name" name="fname" required="required " /></td></tr>
       <br><br>
            <span class="user_form_help_text"></span>
          
        
      </div>
    </div>
  
 <!-- <div></div> -->

    <div class="row-fluid lastname">
      <div class="col-xs-12 col-sm-6"><tr>
        <td>Last name:</td>  <td><input type="text" placeholder="last name" name="lname" required="required "/></td></tr>
            <span class="user_form_help_text"></span>
          
        
      </div>
    </div>

      
   
      
  <div class="row-fluid">
    <div class="col-xs-12 col-sm-6">
		<tr><td>Program</td><span class="mandatory_star style1"></span> : 
      <td><select class="list_text" name="department"required="required " >
	  <option value="">Select branch</option>
<option value="ECE">ECE</option>
<option value="CSE">CSE</option>
<option value=CHEMICAL">CHEMICAL</option>
<option value="ME">ME</option>
<option value="BSMS">BSMS</option>
<option value="BIO engineering">Bio Engineering</option>
<option value="CIVIL">CIVIL</option>
<option value="MCA">MCA</option>
</select>
      
      <span class="user_form_help_text"></span>
    </div>
  </div>
  <!-- <div></div> -->
  <div class="row-fluid">
    <div class="col-xs-12 col-sm-6">
    <tr><td>Batch Passout</td><span class="mandatory_star style1"></span> :

        <td><select name="passout"required="required ">
<option value="">Select year</option>
<option value="1964">1964</option>
<option value="1965">1965</option>
<option value="1966">1966</option>
<option value="1967">1967</option>
<option value="1968">1968</option>
<option value="1969">1969</option>
<option value="1970">1970</option>
<option value="1971">1971</option>
<option value="1972">1972</option>
<option value="1973">1973</option>
<option value="1974">1974</option>
<option value="1975">1975</option>
<option value="1976">1976</option>
<option value="1977">1977</option>
<option value="1978">1978</option>
<option value="1979">1979</option>
<option value="1980">1980</option>
<option value="1981">1981</option>
<option value="1982">1982</option>
<option value="1983">1983</option>
<option value="1984">1984</option>
<option value="1985">1985</option>
<option value="1986">1986</option>
<option value="1987">1987</option>
<option value="1988">1988</option>
<option value="1989">1989</option>
<option value="1990">1990</option>
<option value="1991">1991</option>
<option value="1992">1992</option>
<option value="1993">1993</option>
<option value="1994">1994</option>
<option value="1995">1995</option>
<option value="1996">1996</option>
<option value="1997">1997</option>
<option value="1998">1998</option>
<option value="1999">1999</option>
<option value="2000">2000</option>
<option value="2001">2001</option>
<option value="2002">2002</option>
<option value="2003">2003</option>
<option value="2004">2004</option>
<option value="2005">2005</option>
<option value="2006">2006</option>
<option value="2007">2007</option>
<option value="2008">2008</option>
<option value="2009">2009</option>
<option value="2010">2010</option>
<option value="2011">2011</option>
<option value="2012">2012</option>
<option value="2013">2013</option>
<option value="2014">2014</option>
<option value="2015">2015</option>
<option value="2016">2016</option>
<option value="2017">2017</option>
<option value="2018">2018</option>
</select></td></tr>

      
      <span class="user_form_help_text"></span>
    </div>
  </div>

      <!-- <div></div> -->

    <div class="row-fluid mobile_number">
      <div class="col-xs-12 col-sm-6">
        <tr><td>Mobile Number</td>

        <!-- for show -->
  
            <td><input class="text_field" id="profile_mobile_number" maxlength="10" name="mnumber" placeholder="mobile number"size="" type="text" required="required "/></td></tr>
            <span class="user_form_help_text"></span>
          
        
      </div>
    </div>
<div class="password">
      <div class="">
        <tr><td>password</td><span class="mandatory_star style1"></span> :

        <!-- for show -->
  
          <td><input type="password" placeholder="password" name="password" required="required "/></td></tr><br>
            <span class="user_form_help_text"></span>
          
        
      </div>
    </div>
	<div class="">
      <div class="">
        <tr><td>designation</td><span class="mandatory_star style1"></span> :

        <!-- for show -->
  
          <td><input type="text" placeholder="designation with company name" name="company" required="required "/></td></tr><br>
            <span class="user_form_help_text"></span>
          
        
      </div>
    </div>
	
	<div class="">
      <div class="">
        <tr><td>current location</td><span class="mandatory_star style1"></span> :

        <!-- for show -->
  
          <td><input type="text" placeholder="current location" name="location" required="required "/></td></tr><br>
            <span class="user_form_help_text"></span>
          
        
      </div>
    </div>



			  		
				
<div >
      <div class="">
        <tr><td>Image</td><span class="mandatory_star style1"></span> :

        <!-- for show -->
  
          <td><input type="file" name="image1212" required="required "/></td></tr><br>
            <span class="user_form_help_text"></span>
          
        
      </div>
    </div>
				
					<tr>

		      			<td>&nbsp;</td>
	    			</tr>
				

	    		<tr align ="right">
	      			<td ><input class="btn-success"  id="button" name="submit" type="submit" value="register"></td>
					<td><a href="login.php"><input class="btn-success" type="button" name ="login"style="clear:both"value="login if already registered" onclick=""></a></td>
	      			
	    		</tr>
				</form>
    		</tbody></table>

		<h4>Welcome to the 5,000 plus-strong community of NIT AGARTALA graduates. A community that has earned a reputation for excellence and leadership in the field of engineering. A network that comprises graduates of a variety of programmes. Bond with your batch-mates. Meet your fellow chapter-members. Stay connected with your alma mater. Find everything of interest to NITA alumni here.</h4>
		<p></p>
		<h2>Our Team</h2>

		<div class="row">
			<div class="span4">
				<div class="thumb3">
					<div class="thumbnail clearfix">
						<figure class=""><img src="images/a1.jpg" alt=""></figure>
						<div class="caption">
							<div class="txt1">KOLKATTA CHAPTER </div>
							<div class="txt2">alumni meet in kolkatta.</div>
						</div>
					</div>
				</div>
			</div>
			<div class="span4">
				<div class="thumb3">
					<div class="thumbnail clearfix">
						<figure class=""><img src="images/a2.jpg" alt=""></figure>
						<div class="caption">
							<div class="txt1">GOLDEN JUBILEE</div>
							<div class="txt2">golden jubilee year ceelibration.</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="span4">
				<div class="thumb3">
					<div class="thumbnail clearfix">
						<figure class=""><img src="images/a3.jpg" alt=""></figure>
						<div class="caption">
							<div class="txt1">ALUMNI-KOLKATTA </div>
							<div class="txt2"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="span4">
				<div class="thumb3">
					<div class="thumbnail clearfix">
						<figure class=""><img src="images/a4.jpg" alt=""></figure>
						<div class="caption">
							<div class="txt1">ALUMNI MEET</div>
							<div class="txt2">Meeting with Director.</div>
						</div>
					</div>
				</div>
			</div>
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

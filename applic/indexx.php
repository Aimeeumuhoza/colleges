<?php
	include('db_connect.php');
	$sql1 = "SELECT * FROM bachelor";
	$sql2 = "SELECT * FROM masters";
	$sql3 = "SELECT * FROM doctorate";
	$sql4 = "SELECT * FROM professor";

	$re1 = mysqli_query($conn, $sql1);
	$res11 = mysqli_fetch_all($re1, MYSQLI_ASSOC);

	$re2 = mysqli_query($conn, $sql2);
	$res12 = mysqli_fetch_all($re2, MYSQLI_ASSOC);

    $re3 = mysqli_query($conn, $sql3);
	$res13 = mysqli_fetch_all($re3, MYSQLI_ASSOC);

	$re4 = mysqli_query($conn, $sql4);
	$res14= mysqli_fetch_all($re4, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>online application</title>
<link rel="stylesheet" href="css/style.css">
<script src="https://kit.fontawesome.com/1f8adbc732.js" crossorigin="anonymous"></script>
<meta charset="utf-8">
<style>
 .Account {
  position: absolute;
  
  right: 0px;
  width: 180px;
  height: 50px;
  border: 0px solid green;
}
</style>
</head>
<body bg="">
	

<div class="header">
	<h3>Welcome to Online Scholarship application system</h3>
  <div class="navbar">
	<a href="#home">home</a>
	<a href="contacts.php">Contacts</a>
	<a href="#about">About</a>
	<a href="#privacy">privacy policy</a>
	<a href="application form.php">apply now</a>
	<a href="logout.php" class="Account">log out</a>
	</div>
</div>
		  
<h1><center>there is latest available scholarships
</center></h1>


<div class="row" style="background-color:#aaa;">
  <div class="column side" style="background-color:#aaa;">
	
	 <div class="dropdown ">
    <button class="dropbtn">bachelor
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content" style= "background-color:blue;">
      <?php foreach ($res11 as $universe): ?>
		 <a> <?php echo $universe['college'] ?> </a>
		 <a> <?php echo $universe['program'] ?> </a>
		 <a> <?php echo $universe['fees'] ?> </a>
	<?php endforeach ?>
     </div>
  </div> 
	  
	  
	  
	
	</div>
  <div class="column middle" style="background-color:#bbb;">
	
	
	 <div class="dropdown">
    <button class="dropbtn">master's
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content" style= "background-color:blue;">
		 <?php foreach ($res12 as $universe): ?>
		 <a> <?php echo $universe['college'] ?> </a>
		 <a> <?php echo $universe['program'] ?> </a>
		 <a> <?php echo $universe['fees'] ?> </a>
	<?php endforeach ?>
      
      
    </div>
  </div>
	
	
	</div>
  <div class="column middle" style="background-color:#ccc;">
	 <div class="dropdown">
    <button class="dropbtn">doctorate
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
		 <?php foreach ($res13 as $universe): ?>
		 <a> <?php echo $universe['college'] ?> </a>
		 <a> <?php echo $universe['program'] ?> </a>
		<a> <?php echo $universe['fees'] ?> </a>
	<?php endforeach ?>
      
    </div>
  </div>
	  
	
	
	</div>
   <div class="column side" style="background-color:#ccc;">
	 <div class="dropdown">
    <button class="dropbtn">professor
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
		 <?php foreach ($res14 as $universe): ?>
		 <a> <?php echo $universe['college'] ?> </a>
		  <a> <?php echo $universe['program'] ?> </a>
		   <a> <?php echo $universe['fees'] ?> </a>
	<?php endforeach ?>
     
    
    </div>
  </div>
</div>



</div>
</div>
	<img src="images/succ.jpg" alt="this is image" >
	

<h1><center>how to apply to the listed scholarship</center></h1>
	<div class="center" >
	<h4>the listed scholarship above, contain their links
	to those who feel interested , clink on a links'college 
	you want to know much about ,you will find all information you may want.</h4>
	
	<h1>Get advice on finding the right school for you</h1>
		<h3>Compus life</h3>
		<p>See what campus life is really like at thousands of colleges and compare campus rankings.like colleges with the best studentlife,safest college compuses and best college location </p>
		
		<h3>Academic </h3>
		<p>Explore top academic colleges based on admissions selectivity, research expenditures, and professor quality</p>
		<h3>students</h3>
		<p>find a college that matches your preferences and explore student reviews their social life  .</p>
		<img src="images/pic2.jpg" class="image-student" alt="this is image">
		<h3> focus on goal</h3>
		<p>Ask yourself where you want to be in four or five years. If you can pinpoint a reasonable job and financial outlook, consider which college might best help you reach those goals. </p>
		
		
	
	</div>
	<div class="center" id="privacy">

<h2><center>What this policy cover</center></h2>


<div class="center">
  <p>Your privacy is important to us, and so is being transparent about how we collect, 
    use, and share information about you.This policy also explains your choices surrounding
     how we use information about you, which include how you can object to certain uses of information 
     about you and how you can access and update certain information about you. If you do not agree
      with this policy, do not access or use our Services. 
		 </p>
	<h2><center>How we share information we collect</center></h2>
	<p>We make collaboration tools, and we want them to work well for you.  
    This means sharing information through the Services we provide.  We share information we collect about you
     in the ways discussed above, including in connection with possible scholarship offereds.</p>
</div>
</div>
	<div class="center" id="about">
		<h1><center>about us</center></h1>
		<p><center>Higher education is key to this mobility but, unfortunately,
			millions of students struggle to get into or through school due 
			to financial constraints.
	
	We???re tackling this pervasive issue by working with investors and universities
	to provide an innovative and forward-looking education financing product for students
			from around the world.
	
	We???re not just a student lender ??? our goal is to set students up for academic,
			professional, and financial successes.
	
	How We Work
	
	Our core company values:
	
	Compassionate and Data-Driven
	
	Committed to Excellence and Inclusion
	
			Bold and Unwavering Integrity</center></p>
			<img src ="images/pic.jpg" alt="this is image">
		
			
			<h1><center> our team</center></h1>
			<p><h3><center> we are team of 50+ which is growing </center></h3></p>
		
			
	
		</div>
<section class="footer">
	
	<div class="footer-box">
		
		
		<div class="footer-list">
		<ul >
		
		<il>email:kamilemile@gmail.com</il><br>
		<il>tel:+250788566937</il><br>
		<il>P.O.Box 506630</il><br>
		<il>Fax: +971 (0)4 401 9330.</il>
	</ul>
</div>
<div class="footer-list">
	
	<a href="#" class="facebook">facebook</a>
<a href="#" class="twitter">twitter</a>
<a href="#" class="linkedin">LinkedIn</a>
</div>
	</div>
</section>

	
	
		

		

</body>
</html>

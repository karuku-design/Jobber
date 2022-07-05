<?php 
session_start();

if (isset($_SESSION['CompanyID']) && isset($_SESSION['CompanyName'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	
	 <title ><?php echo $_SESSION['CompanyName']; ?> Homepage</title>
     <link rel = "icon" href ="jobber 3.png" type = "image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="stylesheet" type="text/css" href="branch.css">
    <link rel="stylesheet" type="text/css" href="Employer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="main.js"></script>
     
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>
	<!-- Navigation bar -->
	<nav class="navbar navbar-expand-md">
    <a class="navbar-brand" href="welcomepage.php">
    	<img class="logo-image" src="small2jobber3.png" alt="Jobberlogo.png" >
    </a>
    <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

     <div class="collapse navbar-collapse" id="main-navigation">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link2" href="employer_homepage.php">Applicants</a>
            </li>
           
            <li class="nav-item">
                <a class="nav-link2" href="#">Career Advice</a>
            </li>
        </ul>
    </div>


    <div class="collapse navbar-collapse" id="main-navigation" style="justify-content:flex-end;">
        <ul class="navbar-nav">
            <li class="nav-item">
               <a class="nav-link" href="Employer_postjob.php">Post a Job</a>
            </li>
	            <li class="nav-item">
	                <a class="nav-link" href="#">Company Profile</a>    
	 			</li>

      		<li class="nav-item" style="border-color: #fff;border-left:2px solid;">
               
                <a class="nav-link" href="logout.php">Log Out</a>
      		</li>
    </ul>
  </div>
</nav>
     <h1>Hello, <?php echo $_SESSION['CompanyName'];?></h1>
     

</body>

	<footer class="page-footer">
    <div class="container">
       <div class="row">
<div class="column3">

<img  src="jobber 3.png" alt="Jobber 3.png"  style= "width: 200px; height=:200px;">
</div>

<div class="column3">
<p><a  href="#" style="font-weight: bold;">Get Started</a></p>
<ul style="list-style-type:none;">
<li style=""><a class="" onclick="document.getElementById('id01').style.display='block'">Sign-Up/Sign-In</a></li>
<li><a href="#">Career Advice</a></li>
<li><a href="#">Browse jobs</a></li>
<li><a href="#">Post jobs</a></li>
</ul>
</div>


<div class="column3">
<p><a  href="#" style="font-weight: bold;">For Employers</a></p>
<ul style="list-style-type:none;">
<li><a href="#">post a job</a></li>
<li><a href="#">Create An Employer Account</a></li>
</ul>
</div>

<div class="column3">
<p style="font-weight: bold;">Contact Us</p>
<ul style="list-style-type:none;">
<li>Tel: +254796253425</li>
<li>     +254716822498</li>
<li>Email: <a href="19j01acs045@anu.ac.ke">19j01acs045@anu.ac.ke</a></li>
<li> <a href="19j01acs046@anu.ac.ke">19j01acs046@anu.ac.ke</a></li>
</ul>
</div>

<div class="column3">
<p style="font-weight: bold;">More info</p>
<ul style="list-style-type:none;">
<li><a  href="#">About Jobber</a></li>
<li><a  href="#">Blog</a></li>
<li><a  href="#">FAQ</a></li>
</ul>
</div>

<div class="column4" >
<p style="align-content: center";>connect with us</p>
<ul class="list2" style="list-style: none;">
  <li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook-f" aria-hidden="true"></i></a></li>
  <li><a href=" https://twitter.com/"target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
  <li><a href="https://www.youtube.com/"target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
  <li><a href="https://www.linkedin.com/"target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
  <li><a href="https://www.instagram.com/"target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
</ul>
</div>

</div>


</div>



    <div>
    <div class="basement">© 2021 Copyright:  A&A basement studios
    </div>
</footer>

</html>

<?php 
}else{
     header("Location: Employer_signin.php");
     exit();
}
 ?>
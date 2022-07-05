<?php 
session_start();

if (isset($_SESSION['CompanyID']) && isset($_SESSION['CompanyName'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	
	 <title ><?php echo $_SESSION['CompanyName']; ?> Job Posting </title>
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
    <a class="navbar-brand" href="Employer_welcomepage.php">
    	<img class="logo-image" src="small2jobber3.png" alt="Jobberlogo.png" >
    </a>
    <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

     <div class="collapse navbar-collapse" id="main-navigation">
        <ul class="navbar-nav">
           
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
     <h1>Hello, <?php echo $_SESSION['CompanyName']; ?> ID <?php echo $_SESSION['CompanyID']; ?></h1>
  <div>

          <!-- Job posting form -->
          
          <form  action="Employerpostjob_val.php" method="post" style="background-color: transparent;">
            <div class="container" style="object-position: center;width: 700px;border: 2px solid #fff;padding: 30px;background-color: transparent;border-radius: 15px;">
              <h1>Post a Job</h1>
              <p>Please fill in this form to post a job.</p>
              <p>Required fields marked with<span style="color: red">*</span></p>
              <hr>

                <?php if (isset($_GET['error'])) { ?>
                  <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>

                <?php if (isset($_GET['success'])) { ?>
                     <p class="success"><?php echo $_GET['success']; ?></p>
                <?php } ?>


              <label for="JobPosition"><b>Job Position<span style="color: red">*</span></b></label>
              <?php if (isset($_GET['JobPosition'])) { ?> 
              <input type="text" placeholder="Enter job title/position" name="JobPosition"  style="border-radius: 14px;" value="<?php echo $_GET['JobPosition']; ?>"><br><?php }
               else{ ?> 
                <input type="text" placeholder="Enter job title/position" name="JobPosition" style="border-radius: 14px;"> <br> 
              <?php }?>
                  

               <label for="Location"><b>Location<span style="color: red">*</span></b></label>
               <?php if (isset($_GET['Location'])) { ?> 
              <input type="text" placeholder="Kindly enter location" name="Location" style="border-radius: 14px;" value="<?php echo $_GET['Location']; ?>"><br><?php }
               else{ ?> 
                <input type="text" placeholder="Kindly enter location" name="Location" style="border-radius: 14px;"> <br> 
              <?php }?>



               <label for="YOE"><b>Years of Experience</b></label>
                <?php if (isset($_GET['YOE'])) { ?>
              <input type="number" min="0" max="100" placeholder="Kindly enter years of experience" name="YOE"  style="border-radius: 14px;  padding: 15px;margin: 5px 0 22px 0;display: inline-block;border: none;background: #f1f1f1; width: 100%;"  value="<?php echo $_GET['YOE']; ?>"><br><?php }
               else{ ?> 
                <input type="number" min="0" max="100" placeholder="YOE" name="YOE" style="border-radius: 14px;  padding: 15px;margin: 5px 0 22px 0;display: inline-block;border: none;background: #f1f1f1; width: 100%;"> <br> 
              <?php }?>

              <label for="Salary"><b>Salary</b></label>
              <?php if (isset($_GET['Salary'])) { ?>
              <input type="number" min="0" max="10000000000" placeholder="Kindly enter salary" name="Salary"  style="border-radius: 14px;  padding: 15px;margin: 5px 0 22px 0;display: inline-block;border: none;background: #f1f1f1; width: 100%;" value="<?php echo $_GET['Salary']; ?>"><br><?php }
               else{ ?> 
                <input type="number" type="number" min="0" max="10000000000" placeholder="Kindly enter salary" name="Salary" style="border-radius: 14px;  padding: 15px;margin: 5px 0 22px 0;display: inline-block;border: none;background: #f1f1f1; width: 100%;"> <br> 
              <?php }?>

              <label for="RED"><b>Recruitment End Date<span style="color: red">*</span></b></label>
              <?php if (isset($_GET['RED'])) { ?>
              <input type="date" placeholder="Format: YYYY-MM-DD" name="RED"  style="border-radius: 14px;  padding: 15px;margin: 5px 0 22px 0;display: inline-block;border: none;background: #f1f1f1; width: 100%;" value="<?php echo $_GET['RED']; ?>"><br><?php }
               else{ ?> 
                <input type="date" placeholder="Format: YYYY-MM-DD" name="RED" style="border-radius: 14px;  padding: 15px;margin: 5px 0 22px 0;display: inline-block;border: none;background: #f1f1f1; width: 100%;"> <br> 
              <?php }?>

              

              <div class="clearfix">
               <a href="Employer_welcomepage.php"> <button type="button" onclick="document.getElementById('id05').style.display='none'" class="cancelbtn" style="background-color:#fc4445; ">Cancel</button></a>
                <button type="submit" class="signupbtn"; style="background-color:#3feee6;" name="submit">Post Job</button>
              </div>
            </div>
          </form>
        </div>   

</body>
<footer>
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
<li><a href="Employer_postjob.php">post a job</a></li>
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
</footer>
</html>

<?php 
}else{
     header("Location: Employer_signin.php");
     exit();
}
 ?>

<?php 
 include "db_conn.php";
session_start();

if (isset($_SESSION['UserID']) && isset($_SESSION['UName'])) {

 ?>


<!DOCTYPE html>
<html>
 <head>
    <title >My HomePage</title>
     <link rel = "icon" href ="jobber 3.png" type = "image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="stylesheet" type="text/css" href="branch.css">
    <link rel="stylesheet" type="text/css" href="pros.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="main.js"></script>
     
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  </head>
<body>


	<nav class="navbar navbar-expand-md" style="">
    <a class="navbar-brand" href="employee.php">
    	<img class="logo-image" src="small2jobber3.png" alt="Jobberlogo.png" >
    </a>
    <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

     
<div class="collapse navbar-collapse" id="main-navigation" style="justify-content: flex-end;">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="logout.php" style="color: #fff; border:2px solid; border-radius: 14px; background-color: #3aafa9; padding: 10px 15px 10px 15px">Logout</a>
            </li>
            <li class="nav-item">
               
  </div>

  </div>
</nav>

     
    <div >
              
              <form class="modal2-content animate" action="profile_val.php" enctype="multipart/form-data" method="post" style="border-radius: 14px;padding: 30px; background-color: transparent;">
                
                            <?php
                           $user_id=$_SESSION['UserID'];
                              $sql="SELECT  * FROM pros_imgtbl WHERE UserID=$user_id   ORDER BY ProfID DESC";
                              $res=mysqli_query($conn,$sql);
                              
                             $rowcount=mysqli_num_rows($res);
                              if ($rowcount==0) {
                                 $sql2="SELECT  * FROM pros_imgtbl WHERE ProfID=1   ORDER BY ProfID DESC";
                                  $res2=mysqli_query($conn,$sql2);
                                  $image=mysqli_fetch_assoc($res2);
                              }else{
                                $image=mysqli_fetch_assoc($res);
                              }
                               ?>
 
                    <div class="thumb-lg member-thumb mx-auto">
                       <img src="uploads/<?=$image['URL']?>"alt="Avatar" class="rounded-circle img-thumbnail" style="display: block;margin-left: auto;margin-right: auto;  border-radius: 170px;height: 170px;width: 170px;">
                    </div>

                  		<h1 style="text-align: center;"><?php echo $_SESSION['UName']; ?></h1>
                  <?php if (isset($_GET['error'])) { ?>
                        <p class="error"> <?php echo $_GET['error']; ?> </p>
                  <?php } ?>
                      <?php if (isset($_GET['success'])) { ?>
                     <p class="success"><?php echo $_GET['success']; ?></p>
                <?php } ?>

               <form action="profile_val.php" method="Post" enctype="multipart/form-data">

                  <label><b>Upload or change profile picture</b></label><br>
                  <input type="file" name="my_image">
                  <input type="submit" name="submit" value="upload" style="border-radius: 14px; background-color:#f79e02; ">
                        <br>

                  <label for="salary"><b>Enter your prefered salary</b></label>
                  <input type="number" placeholder="salary" name="salary" style="border-radius: 14px;  padding: 15px;margin: 5px 0 22px 0;display: inline-block;border: none;background: #f1f1f1; width: 100%;">
              
                   <label for="AOE"><b>Area Of Expertise</b></label>
                  <input type="text" placeholder="area of expertise" name="AOE" >

                  <label for="jobtype"><b>Job Type</b></label>
                  <input type="text" placeholder="formal/informal" name="jobtype" >

                  <label for="location"><b>Your Current location</b></label>
                  <input type="text" placeholder="location" name="location" >

                 <label for="YOE"><b>Years Of Experience</b></label>
                  <input type="number" placeholder="Years of experience" name="YOE" style="border-radius: 14px;  padding: 15px;margin: 5px 0 22px 0;display: inline-block;border: none;background: #f1f1f1; width: 100%;" >

                  <div class="clearfix">
               <a href="employee.php"> <button type="button" onclick="document.getElementById('id05').style.display='none'" class="cancelbtn" style="background-color:#fc4445; ">Cancel</button></a>
                <button type="submit" class="signupbtn"; style="background-color:#3feee6;" name="submit">Save</button>
              </div>
         </form>
       </form>
      </div>

 <!-- upload resume -->
<div style="display: flex; justify-content: center;align-items: center;">

  <form action="resume_uploads.php" method="Post" enctype="multipart/form-data">
                  <?php if (isset($_GET['error2'])) { ?>
                        <p class="error"> <?php echo $_GET['error2']; ?> </p>
                  <?php } ?>

                  <?php if (isset($_GET['success'])) { ?>
                     <p class="success"><?php echo $_GET['success']; ?></p>
                <?php } ?>



          <p style="font-size: 2em; font-weight: bold;font-family: arial, sans-serif;color: #17252a;text-align: center;">Upload Your Resume so that employers can spot you</p>
          <input type="file" name="file">
          <button type="submit" name="submit"  style="border-radius: 14px; background-color:#3feee6; ">Upload</button>
</form>
</div>





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
</footer>

</body>
</html>

<?php 
}else{
     header("Location: getin.php");
     exit();
}
 ?>		
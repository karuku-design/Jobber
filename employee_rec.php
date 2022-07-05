<?php 
 include "db_conn.php";
session_start();

if (isset($_SESSION['UserID']) && isset($_SESSION['UName'])) {
	$query="SELECT * FROM comptbl";
	$result=mysqli_query($conn,$query);

	$query2="SELECT * FROM comp_postjobtbl";
	$result2=mysqli_query($conn,$query2);
	$rows2=mysqli_fetch_assoc($result2);
	

 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" type="text/css" href="useless.css">
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

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
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
                <a class="nav-link2" href="#">Career Advice</a>
            </li>
        </ul>
    </div>


    <div class="collapse navbar-collapse" id="main-navigation" style="justify-content:flex-end;">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="employee_rec.php">Find you a Job</a>
            </li>
              <li class="nav-item" style="border-color: #fff;border-right:2px solid;">
                  <a class="nav-link" href="myprofile.php">My Profile</a>    
        </li>

<div class="collapse navbar-collapse" id="main-navigation" style="padding-left: 10px;">
       
            <li class="nav-item">
                <a href="logout.php" style="color: #fff; border:2px solid; border-radius: 14px; background-color: #3aafa9; padding: 10px 15px 10px 15px">Logout</a>
            </li>
            <li class="nav-item">
               
  </div>
    </ul>
  </div>
</nav>


<div class="container">
	<div><h2><i>Hello, <?php echo $_SESSION['UName']; ?><BR> We have reccomended the following employment opportunities:</i></h2></div>
	<div class="row">


							           <?php
                        	while ($rows=mysqli_fetch_assoc($result)) {	
                        	?>
 <div class="col-lg-4">
                <div class="text-center card-box" >
                    <div class="member-card pt-2 pb-2" style="height: 600px;">

			<form class="modal2-content animate" action="profile_val.php" enctype="multipart/form-data" method="post" style="border-style: none; padding: 30px; ">

                            <?php
                           
                              $sql="SELECT  * FROM comp_imgtbl";
                              $res=mysqli_query($conn,$sql);
                        		
                          
                              }while ($amon=mysqli_fetch_assoc($res)) {
                              	if ($amon['CompanyID']==$rows['CompanyID']) {
          								$image=$amon['URL'];
                            			
                            		}else{
                            			$sql2="SELECT * FROM comp_imgtbl WHERE ProfID=1";
                            		$r2=mysqli_query($conn,$sql2);
                            		$selec=mysqli_fetch_assoc($r2);
                            		$image=$selec['URL'];

                            	}
                              }

                               ?>
 
                    <div >
                       <img src="uploads/<?=$image?>"alt="Avatar" class="rounded-circle img-thumbnail" style="display: block;margin-left: auto;margin-right: auto;  border-radius: 170px;height: 110px;width: 170px;">
                    </div>

                   
</form>
                  

                        <div class="">
                        	
                            <h4> <?php echo $rows['CompanyName']; ?></h4>
                            <p class="text-muted">@  
                            	<?php 
                            		foreach ($result2 as $value) {
                       
                            		if ($value['CompanyID']==$rows['CompanyID']) {
          									
                            			echo $value ['JobPosition'];
                            		}else{
                            	}
                            		
                            	}
                            	 ?>
                            	<span>| </span><span><a href="#" class="text-pink"><?php echo $rows['Email']; ?></a></span></p>
                        </div>
                        <ul class="social-links list-inline">
                            <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Skype"><i class="fa fa-skype"></i></a></li>
                        </ul>
                        <button type="button" class="btn btn-primary mt-3 btn-rounded waves-effect w-md waves-light"> Apply Now</button>
                        <div class="mt-4">
                            <div class="row">
                                <div class="col-4">
                                    <div class="mt-3">
                                        <h4><?php 
                            		foreach ($result2 as $value) {
                     
                            		if ($value['CompanyID']==$rows['CompanyID']) {
          								if (is_null($value['YOE'])) {
          									echo "N/A";
          								}else{
                            			echo $value ['YOE'];
                            		}
                            		}else{

                            		}
                            	}
                            	 ?></h4>
                                        <p class="mb-0 text-muted">Years of experience</p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mt-3">
                                        <h4><?php 
                            	foreach ($result2 as $value) {
                        			if ($value['CompanyID']==$rows['CompanyID']) {
          									if (is_null($value['Salary'])) {
          									echo "N/A";
          									}else{
                            			echo $value ['Salary'];
                            				}
                            		}else{

                            		}
                            	}
                            	 ?></h4>
                                        <p class="mb-0 text-muted">Salary Offered</p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mt-3">
                                        <h4><?php 
                            		foreach ($result2 as $value) {
        
                            		if ($value['CompanyID']==$rows['CompanyID']) {
          
                            			echo $value ['Location'];
                            		}else{

                            		}
                            	}
                            	
                            	 ?></h4>
                                        <p class="mb-0 text-muted">Location</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


       <?php }?>
</body>

</html>
<?php 
}else{
     header("Location: getin.php");
     exit();
}
 ?>	
</div>
<div>
 <!DOCTYPE html>
 <html>
 <head>
 </head>
 <body>
 
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
</div>
<!DOCTYPE html>
<html lang="en">

  <head>
    <title >Jobber</title>
     <link rel = "icon" href ="jobber 3.png" type = "image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="stylesheet" type="text/css" href="branch.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="main.js"></script>
     
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  </head>
  <body>
<nav class="navbar navbar-expand-md">
    <a class="navbar-brand" href="Jobber_Homepage.html">
    	<img class="logo-image" src="small2jobber3.png" alt="Jobberlogo.png" >
    </a>
    <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

     <div class="collapse navbar-collapse" id="main-navigation">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link2" href="#">Companies</a>
            </li>
           
            <li class="nav-item">
                <a class="nav-link2" href="#">Career Advice</a>
            </li>
        </ul>
    </div>


    <div class="collapse navbar-collapse" id="main-navigation" style="justify-content:flex-end;">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">Find you a Job</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" onclick="document.getElementById('id04').style.display='block'">For Employers</a>

        <!-- The Modal -->
        <div id="id04" class="modal" >
          <span onclick="document.getElementById('id04').style.display='none'"class="close" title="Close Modal">&times;</span>

          <!-- Modal Content -->
          <form class="modal-content animate" action="" method="post">
            

            <div class="container" style="position: absolute;border-style: none;">
             <a href="Employer_signup.php"> <button  type="button" class="btn btn-secondary btn-block"  style="text-align: center; width: 50%; border-radius:12px;  margin: 0;position: absolute;top: 15%;left: 50%;-ms-transform: translate(-50%, -50%);transform: translate(-50%, -50%);"; >Sign-Up</button></a>



           <br><br><p style="color: #fff; text-align: center;">Or</p><br>
             <a href="Employer_signin.php"><button type="button" class="btn btn-primary btn-block" style="text-align: center;width: 50%; border-radius: 12px;  margin: 0;position: absolute;top: 85%;left: 50%;-ms-transform: translate(-50%, -50%);transform: translate(-50%, -50%);" onclick="document.getElementById('id06').style.display='block'"; >Sign-In</button></a> 
            </div>
      
    </form>
  </div>
 </li>

      <li class="nav-item" style="border-color: #fff;border-left:2px solid;">
               
                <a class="nav-link" onclick="document.getElementById('id01').style.display='block'">Get Started</a>

            <!-- The Modal -->
            <div id="id01" class="modal" >
              <span onclick="document.getElementById('id01').style.display='none'"class="close" title="Close Modal">&times;</span>

              <!-- Modal Content -->
              <form class="modal-content animate" action="" method="post">
                

                <div class="container" style="position: absolute;border-style: none;">
                 <a href="getup.php"><button type="button" class="btn btn-secondary btn-block"  style="text-align: center; width: 50%; border-radius:12px;  margin: 0;position: absolute;top: 15%;left: 50%;-ms-transform: translate(-50%, -50%);transform: translate(-50%, -50%);" onclick="document.getElementById('id02').style.display='block'"; >Sign-Up</button></a> 


               <br><br><p style="color: #fff; text-align: center;">Or</p><br>
                 <a href="getin.php"><button type="button" class="btn btn-primary btn-block" style="text-align: center;width: 50%; border-radius: 12px;  margin: 0;position: absolute;top: 85%;left: 50%;-ms-transform: translate(-50%, -50%);transform: translate(-50%, -50%);" onclick="document.getElementById('id03').style.display='block'"; >Sign-In</button></a> 
                </div>
              

              
              </form>
            </div>
      </li>
    </ul>
  </div>
</nav>




<div class="cont" style="  background-image:  linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url('four.jpg'); height:500px; width: 100%;  background-size: cover; background-repeat: no-repeat;
" >
	<p style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); font-size: 3em;font-family:arial,sans-serif;color: #feffff; font-weight: bolder;">“Find out what you like doing best, and get someone to pay you for it.” – Katharine Whitehorn </p>
   <a class="nav-link" onclick="document.getElementById('id01').style.display='block'">Get Started</a> 
</div>

<br><br>


 <script src="specialtext.js"></script>
<div class="fancy">
    <p style="text-shadow: 2px 2px #edb5bf; font-size: 3rem; ">Jobber is:<span class="typed-text">The #No 1 Get A Job Website</span></p>
</div>



<div class="container"> 
    	<div class="row">
    		<div class="column2">   <!--carossel -->
    			
    			<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner" style="border-radius: 10px;">

    <div class="carousel-item active">
      <img src="p8.jpg" alt="Los Angeles" width="100%" height="400">
      <p style="text-align: center;font-weight: bold; font-size: 2em">Need Job</p>
    </div>

    <div class="carousel-item">
      <img src="three.jpg" alt="Chicago" width="100%" height="400;">
      <p style="text-align: center;font-weight: bold; font-size: 2em">Find A Job That Fits You</p>
    </div>
    <div class="carousel-item">
      <img src="one.jpg" alt="New York" width="100%" height="400">
      <p style="text-align: center;font-weight: bold; font-size: 2em">Join Us</p>
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
	
			</div>

    		

    		<div class="column2" style=" border-radius: 15px;"> <!-- search form -->
 				<form class="search" action="" method="Post" style="margin:auto;max-width:300px">
 					<p style="font-size: 2em; font-weight: bold;font-family: arial, sans-serif;color: #17252a;text-align: center;">Search Jobs now</p>
          <input type="text" placeholder="What..e.g. keyword,job-tittle,company" name="what" style="border-radius: 14px;background-color: #57ba98;">
          <input type="text" placeholder="Where..e.g. city,state..." name="where"style="border-radius: 14px;background-color: #65ccb8;">
         
          <a class="" onclick="document.getElementById('id01').style.display='block'"> <button type="Find job" name="search" style="background-color: #e98074; border-radius: 16px; width: 150px; margin-left: 25%; "><i >Search</i></button></a>
                </form>

    		</div>
    	</div>
    	</div>

</div>


   <div class="container">

    <div class="row">
        <div class="colA" style="width: 35%; float: left;">
            <h2>Testimonials</h2>
                <p></p>
        </div>
      
       <div class="gridd">
          <div class="gridt"><img src="p1.jpg"><p>Ann Karuku.<i><p style="font-size: 18px;">"They match aspiring candidates with inspiring companies. Get hired for your abilities and potential, not just your resume."</p></i></p></div>
          <div class="gridt" ><img src="p2.jpg"><P>Amon Kiprotich.<i><p style="font-size:18px;">"They are here to be your advocate and coach as you apply for the opportunities that interest you."</p></i> </P></div>
          <div class="gridt"><img src="p3.jpg"><P>Hellen.<i><p style="font-size: 18px;">"They provide a new whole world of new and better Opportunities." </p></i></P></div>  
          <div class="gridt" ><img src="p4.png"><P>Josephine Anders<i><p style="font-size: 18px;">"Jobber is amazing! I was able to find the perfect job in just two months." </p></i> </P></div>
      
        </div>
    </div>
     
   </div>             




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
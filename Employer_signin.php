<!DOCTYPE html>
<html>
<head>
	<title>Employer Sign Up</title>
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
	 <div>
          
          <form class="modal2-content animate" action="Employersignin_val.php" method="post" style="border-radius: 14px;padding: 30px;border: 2px solid #1F2833; background-color: transparent;">
                <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal"><a href="Jobber_Homepage.php" style="color: black;">&times;</a></span>
                 

                 <?php if (isset($_GET['error'])) { ?>
                  <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>

                  <label for="CompanyName"><b>CompanyName</b></label>
                  <input type="text" placeholder="Enter CompanyName" name="CompanyName" style="border-radius: 15px;" >

                  <label for="psw"><b>Password</b></label>
                  <input type="password" placeholder="Enter Password" name="psw" style="border-radius: 15px;">
                   
                  <p><input type="checkbox" checked="checked" name="remember"> Remember me</p>
                  <p class="psw" > Forgot <a href="#" style="color:black;">password?</a></p>
                 <a href="Employer_signup.php" style="color: black;">Create an account</a>

                 <div class="clearfix">
                  <button type="submit" class="signinbtn"; style="background-color:#3feee6; float: right;">Sign-In</button>
                 <a href="Jobber_Homepage.php"> <button type="button" onclick="document.getElementById('id06').style.display='none'" class="cancelbtn" style="background-color: #f44336;float: left;" >Cancel</button></a>
               </div>
                  
                   
                    <br>
                  <br>
   </form>
        </div>
</body>
</html>
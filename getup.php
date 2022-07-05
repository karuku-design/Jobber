<!DOCTYPE html>
<html>
<head>
	<title>Employees Sign Up</title>
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
	 <div>
          
          <form  action="getup_val.php" method="post" style="background-color: transparent;">
            <div class="container" style="object-position: center;width: 700px;border: 2px solid #1F2833;padding: 30px;border-radius: 15px;">
              <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal"><a href="Jobber_Homepage.php" style="color: black;">&times;</a></span>
              <h1>Sign Up</h1>
              <p>Please fill in this form to create an account.</p>
              <p>Required fields marked with<span style="color: red">*</span></p>
              <hr>

                <?php if (isset($_GET['error'])) { ?>
                  <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>

                <?php if (isset($_GET['success'])) { ?>
                     <p class="success"><?php echo $_GET['success']; ?></p>
                <?php } ?>


              <label for="firstname"><b>First Name<span style="color: red">*</span></b></label>
              <?php if (isset($_GET['CompanyName'])) { ?> 
              <input type="text" placeholder="firstname" name="firstname" required style="border-radius: 14px;" value="<?php echo $_GET['firstname']; ?>"><br><?php }
               else{ ?> 
                <input type="text" placeholder="firstname" name="firstname" required style="border-radius: 14px;"> <br> 
              <?php }?>
                  

               <label for="lastname"><b>Last Name<span style="color: red">*</span></b></label>
               <?php if (isset($_GET['lastname'])) { ?> 
              <input type="text" placeholder="lastname" name="lastname" style="border-radius: 14px;" required value="<?php echo $_GET['lastname']; ?>"><br><?php }
               else{ ?> 
                <input type="text" placeholder="lastname" name="lastname" required style="border-radius: 14px;"> <br> 
              <?php }?>


                <label for="username"><b>User Name<span style="color: red">*</span></b></label>
               <?php if (isset($_GET['username'])) { ?> 
              <input type="text" placeholder="username" name="uname" style="border-radius: 14px;" required value="<?php echo $_GET['uname']; ?>"><br><?php }
               else{ ?> 
                <input type="text" placeholder="username" name="uname" required style="border-radius: 14px;"> <br> 
              <?php }?>

              <label for="email"><b>Email<span style="color: red">*</span></b></label>
              <?php if (isset($_GET['Email'])) { ?>
              <input type="email" placeholder="email" name="email" required style="border-radius: 14px;  " value="<?php echo $_GET['email']; ?>"><br><?php }
               else{ ?> 
                <input type="email" placeholder="email" name="email" required style="border-radius: 14px;  padding: 15px;margin: 5px 0 22px 0;display: inline-block;border: none;background: #f1f1f1; width: 100%;"> <br> 
              <?php }?>

              <label for="psw"><b>Password<span style="color: red">*</span></b></label>
              <input type="password"pattern=".{8,16}" required title="only 8 to 16 characters" placeholder="Enter Password" name="psw" required required style="border-radius: 14px;  padding: 15px;margin: 5px 0 22px 0;display: inline-block;border: none;background: #f1f1f1; width: 100%;">

              <label for="psw-repeat"><b>Repeat Password<span style="color: red">*</span></b></label>
              <input type="password"pattern=".{8,16}" required title="8 to 16 characters" placeholder="Repeat Password" name="psw_repeat"  required style="border-radius: 14px;  padding: 15px;margin: 5px 0 22px 0;display: inline-block;border: none;background: #f1f1f1; width: 100%;">
              
              <label>
                <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
              </label>

              <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
                <a href="getin.php" style="color: black;">Already have an account?</a>
              <div class="clearfix">
               <a href="Jobber_Homepage.php"> <button type="button" onclick="document.getElementById('id05').style.display='none'" class="cancelbtn" style="background-color:#fc4445; ">Cancel</button></a>
                <button type="submit" class="signupbtn"; style="background-color:#3feee6;" name="submit">Sign Up</button>
                
              </div>
            </div>
          </form>
        </div>
</body>
</html>
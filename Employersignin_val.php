<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['CompanyName']) && isset($_POST['psw'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$CompanyName = validate($_POST['CompanyName']);
	$psw = validate($_POST['psw']);

	if (empty($CompanyName)) {
		header("Location: Employer_signin.php?error=Company Name Name is required");
	    exit();
	}else if(empty($psw)){
        header("Location: Employer_signin.php?error=Password is required");
	    exit();
	}else{
		// hashing the psw
        $psw = md5($psw);

        
		$sql = "SELECT * FROM comptbl WHERE CompanyName='$CompanyName' AND Password='$psw'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['CompanyName'] === $CompanyName && $row['Password'] === $psw) {
            	$_SESSION['CompanyID'] = $row['CompanyID'];
            	$_SESSION['CompanyName'] = $row['CompanyName'];
            	header("Location: Employer_welcomepage.php");
		        exit();
            }else{
				header("Location: Employer_signin.php?error=Incorect Company Name or password");
		        exit();
			}
		}else{
			header("Location: Employer_signin.php?error=Incorect Company Name or password");
	        exit();
		}
	}
	
}else{
	header("Location: Employer_signin.php");
	exit();
}


<?php 
session_start();
include "db_conn.php";

if (isset($_POST['CompanyName']) && isset($_POST['Industry'])
    && isset($_POST['JobType']) && isset($_POST['Email'])&& isset($_POST['psw'])&& isset($_POST['psw_repeat'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$CompanyName = validate($_POST['CompanyName']);
	$psw = validate($_POST['psw']);
	$psw_repeat = validate($_POST['psw_repeat']);
	$Industry = validate($_POST['Industry']);
	$JobType = validate($_POST['JobType']);
	$Email = validate($_POST['Email']);

	$user_data = 'CompanyName'. $CompanyName.'&Industry'.$Industry.'&JobType'.$JobType;


	if (empty($CompanyName)) {
		header("Location: Employer_signup.php?error=Company Name is required&$user_data");
	    exit();

	}else if(empty($Industry)){
        header("Location: Employer_signup.php?error=Industry is required&$user_data");
	    exit();
	
	}else if(empty($JobType)){
        header("Location: Employer_signup.php?error=JobType is required&$user_data");
	    exit();
	

	}else if(empty($Email)){
        header("Location: Employer_signup.php?error=Email is required&$user_data");
	    exit();
	

	}else if(empty($psw)){
        header("Location: Employer_signup.php?error=Password is required&$user_data");
	    exit();

	}else if(empty($psw_repeat)){
        header("Location: Employer_signup.php?error=Repeat Password is required&$user_data");
	    exit();

	}else if($psw !== $psw_repeat){
        header("Location: Employer_signup.php?error=The confirmation password  does not match&$user_data");
	    exit();
	}

	else{

		// hashing the password
        $psw = md5($psw);

	   
           $sql2 = "INSERT INTO comptbl(CompanyName,Industry,JobType,Email,Password) VALUES('$CompanyName', '$Industry','$JobType','$Email', '$psw')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: Employer_signup.php?success=Your account has been created successfully");
	         exit();
           }else {
	           	header("Location: Employer_signup.php?error=unknown error occurred&$user_data");
		        exit();
           
		}
	}
	
}else{
	header("Location: Employer_signup.php");
	exit();
}
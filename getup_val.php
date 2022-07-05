<?php 
session_start();
include "db_conn.php";

if (isset($_POST['firstname']) && isset($_POST['lastname'])&& isset($_POST['uname'])
    && isset($_POST['email'])&& isset($_POST['psw'])&& isset($_POST['psw_repeat'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$firstname = validate($_POST['firstname']);
	$psw = validate($_POST['psw']);
	$psw_repeat = validate($_POST['psw_repeat']);
	$lastname = validate($_POST['lastname']);
	$uname = validate($_POST['uname']);
	$email = validate($_POST['email']);

	$user_data = '&firstname'. $firstname.'&lastname'.$lastname;


	if (empty($firstname)) {
		header("Location: getup.php?error=First Name is required&$user_data");
	    exit();

	}else if(empty($lastname)){
        header("Location: getup.php?error=Lastname is required&$user_data");
	    exit();

	}else if(empty($uname)){
        header("Location: getup.php?error=username is required&$user_data");
	    exit();


	 }else if(empty($email)){
        header("Location: getup.php?error=Email is required&$user_data");
	    exit();
	

	}else if(empty($psw)){
        header("Location: getup.php?error=Password is required&$user_data");
	    exit();

	}else if(empty($psw_repeat)){
        header("Location: getup.php?error=Repeat Password is required&$user_data");
	    exit();

	}else if($psw !== $psw_repeat){
        header("Location: getup.php?error=The confirmation password  does not match&$user_data");
	    exit();
	}

	else{

		// hashing the password
        $psw = md5($psw);
        	$sql = "SELECT * FROM prostbl WHERE UName='$uname' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: getup.php?error=The username is taken try another&$user_data");
	        exit();
		}else {
			$sql2 = "INSERT INTO prostbl(FName,LName,UName,Email,Password) VALUES('$firstname', '$lastname','$uname','$email', '$psw')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: getup.php?success=Your account has been created successfully");
	         exit();
           }else {
	           	header("Location: getup.php?error=unknown error occurred&$user_data");
		        exit();
           
		}
	}
	}
	
}else{
	header("Location: getup.php");
	exit();
}
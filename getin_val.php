<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['psw'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$psw = validate($_POST['psw']);

	if (empty($uname)) {
		header("Location: getin.php?error=CompanyName Name is required");
	    exit();
	}else if(empty($psw)){
        header("Location: getin.php?error=password is required");
	    exit();
	}else{
		// hashing the psw
        $psw = md5($psw);

        
		$sql = "SELECT * FROM prostbl WHERE UName='$uname' AND Password='$psw'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['UName'] == $uname && $row['Password'] == $psw) {
            	$_SESSION['UName'] = $row['UName'];
            	$_SESSION['UserID'] = $row['UserID'];
            	header("Location: employee.php");
		        exit();

            }else{
				header("Location: getin.php?error=Incorect CompanyName or password");
		        exit();
			}
		}else{
			header("Location: getin.php?error=Incorect CompanyName or password");
	        exit();
		}
	}
	
}else{
	header("Location: getin.php");
	exit();
}
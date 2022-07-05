<?php 
session_start();
include "db_conn.php";
if (isset($_SESSION['CompanyID']) && isset($_SESSION['CompanyName'])) {
if (isset($_POST['JobPosition']) && isset($_POST['Location'])
    && isset($_POST['RED'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
		$CompanyID= $_SESSION['CompanyID'];
		$JobPosition = validate($_POST['JobPosition']);
		$Location = validate($_POST['Location']);
		$Salary = validate($_POST['Salary']);
		$YOE = validate($_POST['YOE']);
		$RED = validate($_POST['RED']);
		

	$user_data = 'Job Position'. $JobPosition.'&Location'.$Location.'&JobType'.$Location.'&Recruitment End Date'.$RED;


	if (empty($JobPosition)) {
		header("Location: Employer_postjob.php?error=Job position is required&$user_data");
	    exit();

	}else if(empty($Location)){
        header("Location: Employer_postjob.php?error=Location is required&$user_data");
	    exit();
	
	}else if(empty($Salary)){
        $Salary=0;
	    exit();
	

	}else if(empty($YOE)){
        $YOE=0;
	    exit();
	

	}else if(empty($RED)){
        header("Location: Employer_postjob.php?error=Recruitment End Date is required&$user_data");
	    exit();
	
	}else{

		// hashing the password
        

	   
        $sql2 = "INSERT INTO comp_postjobtbl(CompanyID,JobPosition,Location,YOE,Salary, RED) VALUES('$CompanyID', '$JobPosition' ,'$Location','$YOE','$Salary', '$RED')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: Employer_postjob.php?success=Your Job has been posted successfully");
	         exit();
           }else {
	           	header("Location: Employer_postjob.php?error=unknown error occurred&$user_data");
		        exit();
		}
	}
	
	}else{
		header("Location: Employer_postjob.php");
		exit();
	}
}else{
	header("Location: Employer_postjob.php");
	exit();
}
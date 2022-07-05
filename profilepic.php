<?php

include "db_conn.php";

session_start();

if (isset($_SESSION['UserID']) && isset($_SESSION['UName'])) {


if (isset($_POST['submit']) && isset($_FILES['my_image'])){
	echo "<pre>";
	print_r(isset($_FILES['my_image']));
	
	echo "</pre>";

	$img_name=$_FILES['my_image']['name'];
	$img_size=$_FILES['my_image']['size'];
	$tmp_name=$_FILES['my_image']['tmp_name'];
	$error=$_FILES['my_image']['error'];

	if ($error===0) {
		if ($img_size>20000000) {
		$em="File size is too large!";
		header("Location: myprofile.php?error=$em");	
		}else{
			$img_ex=pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc=strtolower($img_ex);
			$allowed_exs=array("jpg","jpeg","png");

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name=uniqid("IMG-",true).'.'.$img_ex_lc;
				$img_upload_path='uploads/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);

				$user_id=$_SESSION['UserID'];

					//insert into db
				$sql="INSERT INTO pros_imgtbl (UserID, URL) VALUES ('$user_id','$new_img_name') ";
				mysqli_query($conn,$sql); 
				header("Location:myprofile.php");


				}else{
				$em="You cant upload files of this type!";
				header("Location: myprofile.php?error=$em");
			}
		}

	}else{
		$em="unknown error occurred!";
		header("Location: myprofile.php?error=$em");
	}


}else{
	header("Location:myprofile.php");
}
}else{
     header("Location: myprofile.php");
     exit();
}













/*if isset($_POST['salary'])
    && isset($_POST['AOE']) && isset($_POST['jobtype'])&& isset($_POST['location'])&& isset($_POST['YOE'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$ = validate($_POST['']);
	$salary = validate($_POST['salary']);
	$AOE = validate($_POST['AOE']);
	$jobtype = validate($_POST['JobType']);
	$location = validate($_POST['location']);
	$YOE = validate($_POST['YOE']);
	

	$user_data = ''. $salary.'&salary'.$.'&JobType'.$JobType;


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
}*/
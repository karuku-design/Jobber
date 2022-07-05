<?php
include "db_conn.php";
session_start();

if (isset($_SESSION['UserID']) && isset($_SESSION['UName'])) {

if (isset($_POST['submit'])) {
	$file=$_FILES['file'];
	$filename= $_FILES['file']['name'];
	$fileTmpname= $_FILES['file']['tmp_name'];
	$filesize= $_FILES['file']['size'];
	$fileerror= $_FILES['file']['error'];
	$filetype= $_FILES['file']['type'];




	$fileExt=explode('.',$filename);
	$fileActualExt=strtolower(end($fileExt));

	$allowed=array('pdf');

	if (in_array($fileActualExt,$allowed)) {
		if ($fileerror===0) {
			if ($filesize< 1000000) {
				
				$fileNameNew=uniqid('', true).".".$fileActualExt;
				$fileDestination='uploads/'.$fileNameNew;
				move_uploaded_file($fileTmpname,$fileDestination );
					$succ="uploadsuccessful";
				header("location: myprofile.php?success=$succ");


					$user_id=$_SESSION['UserID'];
					//insert into db
				$sql="INSERT INTO pros_resumetbl (UserID, URL) VALUES ('$user_id','$fileNameNew') ";
				mysqli_query($conn,$sql); 
				header("Location:myprofile.php");


			}else{
				$er="Your file is too big!";
				header("Location:myprofile.php?error2=$er") ;
			}
		}else{
			$er="There was an error uploading your file";
			header("Location:myprofile.php?error2=$er") ;
		}


	}else{
		$er="You cannot upload this file";
			header("Location:myprofile.php?error2=$er") ;
		
	}
}

}else{
	echo "failure";
}
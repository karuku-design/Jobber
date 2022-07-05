<?php
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

				header("location: employee.php?uploadsuccessful");

					//insert into db
				$sql="INSERT INTO pros_resumetbl (UserID, URL) VALUES ('$user_id','$new_img_name') ";
				mysqli_query($conn,$sql); 
				header("Location:myprofile.php");



			}else{
				echo "Your file is too big!";
			}
		}else{
			echo "There was an error uploading your file";
		}


	}else{
		echo "You cannot upload this file";
	}
}
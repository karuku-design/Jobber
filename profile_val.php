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
			header("Location: myprofile.php");
			exit();
		}


		 
		 if  (isset($_POST['salary'])&& isset($_POST['AOE']) && isset($_POST['jobtype'])&& isset($_POST['location'])&& isset($_POST['YOE'])) {

			function validate($data){
		       $data = trim($data);
			   $data = stripslashes($data);
			   $data = htmlspecialchars($data);
			   return $data;
			}

			$my_image=validate($_POST['my_image']);
			$salary = validate($_POST['salary']);
			$AOE = validate($_POST['AOE']);
			$jobtype = validate($_POST['jobtype']);
			$location = validate($_POST['location']);
			$YOE = validate($_POST['YOE']);
			

			$user_data = 'salary'. $salary.'&AOE'.$AOE.'&jobtype'.$jobtype.'&location'.$location.
			'&YOE'.$YOE;

		 if (empty($salary)) {
				
			    exit();

			}else if(empty($AOE)){
		        header("Location: myprofile.php?error=Expertise is required&$user_data");
			    exit();
			
			}else if(empty($jobtype)){
		        header("Location: myprofile.php?error=Job Type is required&$user_data");
			    exit();
			

			}else if(empty($location)){
		        header("Location: myprofile.php?error=Location is required&$user_data");
			    exit();
			

			}else if(empty($YOE)){
		       
			    exit();

			}else{

						$user_id=$_SESSION['UserID'];

		           $sql2 = "INSERT INTO pros_preftbl (UserID, Salary, Location, YOE, AOE, JobType) VALUES
        ('$user_id', '$salary','$location','$YOE', '$AOE','$jobtype')";
		           $result2 = mysqli_query($conn, $sql2);
		           if ($result2) {
		           		$suc="Your Details have been saved successfully";
		           	 header("Location: myprofile.php?success=$suc");
			         exit();
		           }else {
			           	header("Location: myprofile.php?error=unknown error occurred&$user_data");
				        exit();
		           
				}
			}
			
		
		}else{
		     header("Location: myprofile.php");
		     exit();
		}

		

}else{
	header("Location:myprofile.php");
}
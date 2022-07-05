<?php
include "db_conn.php";
session_start();
if (isset($_SESSION['UserID']) && isset($_SESSION['UName'])) {
	

	 if  (isset($_POST['salary'])&& isset($_POST['AOE']) && isset($_POST['jobtype'])&& isset($_POST['location'])&& isset($_POST['YOE'])) {

	 	$salary=$_POST['salary'];
	 	$AOE=$_POST['AOE'];
	 	$jobtype=$_POST['jobtype'];
	 	$YOE=$_POST['YOE'];
	 	$location=$_POST['location'];

	 		echo $salary." ".$AOE." ".$jobtype." ".$YOE." ".$location;
	 		$user_id=$_SESSION['UserID'];
	 		echo "$user_id";
		           
$sql2 = "INSERT INTO pros_preftbl (UserID, Salary, Location, YOE, AOE, JobType) VALUES
        ('$user_id', '$salary','$location','$YOE', '$AOE','$jobtype')";

		           $result2 = mysqli_query($conn, $sql2);
		           if ($result2) {
		            echo "successfully submitted";
		           }else{
		           	echo "Not submitted";
		           }

		         

}else{
	echo "something wrong";
}

/*
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
			$jobtype = validate($_POST['JobType']);
			$location = validate($_POST['location']);
			$YOE = validate($_POST['YOE']);
			

			$user_data = 'salary'. $salary.'&AOE'.$AOE.'&JobType'.$JobType.'&location'.$location.
			'&YOE'.$YOE.;

		 if (empty($salary)) {
				$salary=0;
			    exit();

			}else if(empty($AOE)){
		        header("Location: myprofile.php?error=Experience is required&$user_data");
			    exit();
			
			}else if(empty($jobtype)){
		        header("Location: myprofile.php?error=JobType is required&$user_data");
			    exit();
			

			}else if(empty($location)){
		        header("Location: myprofile.php?error=Location is required&$user_data");
			    exit();
			

			}else if(empty($YOE)){
		       $YOE=0;
			    exit();

			}else{


		           $sql2 = "INSERT INTO pros_preftbl(UserID, Salary, Location, YOE, AOE, JobType) VALUES('$user_id', '$salary','$location','$YOE', 'AOE','$jobtype')";
		           $result2 = mysqli_query($conn, $sql2);
		           if ($result2) {
		           	 header("Location: myprofile.php?success=Your Details have been saved successfully");
			         exit();
		           }else {
			           	header("Location: myprofile.php?error=unknown error occurred&$user_data");
				        exit();
		           
				}
			}
			
		
		}else{
		     header("Location: myprofile.php");
		     exit();
		}*/



}else{
 echo "failure";
}
?>






 
	 <?php
	                           
	$sql="SELECT  * FROM pros_imgtbl ORDER BY ProfID ASC";
                              $res=mysqli_query($conn,$sql);
                              $amon=mysqli_fetch_assoc($res);

                            	if ($rows['UserID']==$amon['UserID']) {
                            		$ref=$amon['UserID'];
             						$image=$amon['URL'];
                            		
                            	}else{
                            		$sql2="SELECT * FROM pros_imgtbl WHERE ProfID=1";
                            		$r2=mysqli_query($conn,$sql2);
                            		$selec=mysqli_fetch_assoc($r2);
                            		$image=$selec['URL'];

                            	}
                            
                              
                              ?>




















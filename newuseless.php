<?php 
 include "db_conn.php";
session_start();

if (isset($_SESSION['UserID']) && isset($_SESSION['UName'])) {
	$query="SELECT * FROM prostbl";
	$result=mysqli_query($conn,$query);

	$query2="SELECT * FROM pros_preftbl";
	$result2=mysqli_query($conn,$query2);
	$rows2=mysqli_fetch_assoc($result2);

 ?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" type="text/css" href="useless.css">
         <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="stylesheet" type="text/css" href="branch.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="main.js"></script>
     
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

<div class="container">
	<div class="row">

							<?php
                        	while ($rows=mysqli_fetch_assoc($result)) {
                        		
                        	?>
 <div class="col-lg-4">
                <div class="text-center card-box">
                    <div class="member-card pt-2 pb-2">

			<form class="modal2-content animate" action="profile_val.php" enctype="multipart/form-data" method="post" style="border-style: none; padding: 30px; background-color: transparent;">

                            <?php
                           $user_id=$_SESSION['UserID'];
                              $sql="SELECT  * FROM pros_imgtbl";
                              $res=mysqli_query($conn,$sql);
                              
                             $rowcount=mysqli_num_rows($res);
                              if ($rowcount==0) {
                                 $sql2="SELECT  * FROM pros_imgtbl WHERE ProfID=20   ORDER BY ProfID DESC";
                                  $res2=mysqli_query($conn,$sql2);
                                  $image=mysqli_fetch_assoc($res2);
                              }else{
                                $image=mysqli_fetch_assoc($res);
                              }
                               ?>
 
                    <div >
                       <img src="uploads/<?=$image['URL']?>"alt="Avatar" class="rounded-circle img-thumbnail" style="display: block;margin-left: auto;margin-right: auto;  border-radius: 170px;height: 170px;width: 170px;">
                    </div>

                   
</form>
                  

                        <div class="">
                        	
                            <h4> <?php echo $rows['UName']; ?></h4>
                            <p class="text-muted">@  
                            	<?php 
                            		
                            		if ($rows2['UserID']==$rows['UserID']) {
          
                            			echo $rows2 ['AOE'];
                            		}
                            	
                            	 ?>
                            	<span>| </span><span><a href="#" class="text-pink"><?php echo $rows['Email']; ?></a></span></p>
                        </div>
                        <ul class="social-links list-inline">
                            <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Skype"><i class="fa fa-skype"></i></a></li>
                        </ul>
                        <button type="button" class="btn btn-primary mt-3 btn-rounded waves-effect w-md waves-light"> More Info</button>
                        <div class="mt-4">
                            <div class="row">
                                <div class="col-4">
                                    <div class="mt-3">
                                        <h4><?php 
                            		
                            		if ($rows2['UserID']==$rows['UserID']) {
          
                            			echo $rows2 ['YOE'];
                            		}
                            	
                            	 ?></h4>
                                        <p class="mb-0 text-muted">Years of experience</p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mt-3">
                                        <h4><?php 
                            		
                            		if ($rows2['UserID']==$rows['UserID']) {
          
                            			echo $rows2 ['Salary'];
                            		}
                            	
                            	 ?></h4>
                                        <p class="mb-0 text-muted">Prefered Salary</p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mt-3">
                                        <h4><?php 
                            		
                            		if ($rows2['UserID']==$rows['UserID']) {
          
                            			echo $rows2 ['Location'];
                            		}
                            	
                            	 ?></h4>
                                        <p class="mb-0 text-muted">Location</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

		


            <div class="col-12">
                <div class="text-right">
                    <ul class="pagination pagination-split mt-0 float-right">
                        <li class="page-item"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span> <span class="sr-only">Previous</span></a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span> <span class="sr-only">Next</span></a></li>
                    </ul>
                </div>
            </div>
        </div>

</div>
       <?php }?>
</body>
</html>
<?php 
}else{
     header("Location: getin.php");
     exit();
}
 ?>	
<?php
session_start();
if(!isset($_SESSION['id'])){
	echo '<script>windows: location="admin.php"</script>';
	}
		
$session=$_SESSION['id'];
include 'db.php';
$query =("SELECT * FROM `admin1` where id= '$session'");
 $result=mysqli_query($conn,$query);
if(isset($_POST['bill']))
{
        $user=$_POST['user'];
         $period=$_POST['period'];
          $cu=$_POST['cu'];
          $pu=$_POST['pu'];
          $last=$_POST['last'];
          $ldate=$_POST['ldate'];
          $unit=$_POST['unit'];
    
       $total=($cu+$pu)*$unit;      
    $sql="INSERT into billing() values('','$user',$period,'$last',$cu,$pu,$unit,'$ldate',$total)";
              if(mysqli_query($conn,$sql)){
    
                 echo '<script>alert("Submitted Succesfully!")</script>';
                 header('location:index.php');
    
              }else{
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                        } 
}
?>
    
<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="client.css">
</head>

<body>

<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <h1 class="well" align="center">Generating Bill</h1>
	<div class="col-lg-12 well">
	<div class="row">
				<form action="" method="POST">
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-12 form-group">
								<label for="">Select User</label>
         <select  name="user"  style="width:50%;" >
                    <option value="">--Select User--</option>
                            <?php 
                             include('db.php');
                        $res=mysqli_query($conn,"SELECT * FROM register order by fname asc"); 
                        while ($row=mysqli_fetch_array($res)) {
                        echo "<option value=" . $row['id'] . ">" . $row['fname'] . "</option>";
                         }
                            echo"</select>";
                            ?>
							</div>
						</div>					
						<div class="form-group">
							<label>Bill Period In Month</label>
							<input type="text" name="period" value="" placeholder="Enter Period Here.."  class="form-control" required>
						</div>	
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Current Month Unit</label>
								<input type="text" name="cu" value="" placeholder="Enter Current Unit Here.." class="form-control" required>
							</div>	
							<div class="col-sm-6 form-group">
								<label>Previous Month Unit</label>
								<input type="text" name="pu" value="" placeholder="Enter Previous Unit Here.." class="form-control" required>
							</div>		
						</div>
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Last Paid</label>
								<input type="date" name="last" value=""  class="form-control" required>
							</div>		
							<div class="col-sm-6 form-group">
								<label>Last Date</label>
								<input type="date" name="ldate" value=""  class="form-control" required>
							</div>	
						</div>						
					<div class="form-group">
						<label>Per Unit Charge</label>
						<input type="text" name="unit" value="5"  class="form-control" required>
					</div>		
					<button type="submit" name="bill" class="btn btn-block btn-info">Submit</button><hr>					
					</div>              
				</form> 
				</div>
				</div>
	</div>
    </body>
    </html>

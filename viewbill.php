<?php
session_start();
if(!isset($_SESSION['id'])){
	echo '<script>windows: location="admin.php"</script>';
	}
		
$session=$_SESSION['id'];
include 'db.php';
$query =("SELECT * FROM `admin1` where id= '$session'");
 $result=mysqli_query($conn,$query);

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
<h2 class=" display-3 alert-warning" align="center">Bill Details</h2><hr>
       <form action="" method="post" >
        <!--Task field Created Code is here-->
<table class="table table-dark table-striped" >
   <thead>
       <tr>
            <th class="table-light text-dark"><strong>ID</strong></th>
            <th class="table-warning text-dark"><strong >Connection Id:</strong></th>
            <th class="table-success text-dark"><strong >Period:</strong></th>
            <th class="table-secondary text-dark"><strong>Current Month Unit:</strong></th>
            <th class="table-info text-dark"><strong>Previous Month Unit</strong></th>
            <th class="table-danger text-dark"><strong>Unit</strong></th>
            <th class="table-warning text-dark"><strong>Last Paid</strong></th>
            <th class="table-success text-dark"><strong>Last Date</strong></th>
            <th class="table-secondary text-dark"><strong>Total Amount</strong></th>
            <th class="table-light text-dark"><strong>View Bills</strong></th>
            
       </tr>
     </thead>
<tbody>
<?php
$id=1;
$sel_query="SELECT * from billing ORDER BY id asc;";
$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_assoc($result)) {?>
<tr>
        <td align="center"><?php echo $id; ?></td>
        <td align="center"><?php echo $row["user"]; ?></td>
        <td align="center"><?php echo $row["period"]; ?></td>
        <td align="center"><?php echo $row["cu"]; ?></td>
        <td align="center"><?php echo $row["pu"]; ?></td>
        <td align="center"><?php echo $row["unit"]; ?></td>
        <td align="center"><?php echo $row["last_date"]; ?></td>
        <td align="center"><?php echo $row["ldate"]; ?></td>
        <td align="center"><?php echo $row["total"]; ?></td>

        <td align="center"><a href="bill.php?id=<?php echo $row["id"]; ?>" class="btn bnt-md btn-outline-warning" name="view">View</a></td>
            
</tr>
<?php $id++; } ?>
</tbody>
</table>
</form>
<?php 
   include('footer.php');
 ?>
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
<h2 class=" display-3 alert-warning" align="center">View Customers</h2><hr>
       <form action="" method="post" >
        <!--Task field Created Code is here-->
<table class="table table-dark table-striped" >
   <thead>
       <tr>
            <th class="table-light text-dark"><strong>ID</strong></th>
            <th class="table-warning text-dark"><strong >First Name</strong></th>
            <th class="table-success text-dark"><strong >Last Name</strong></th>
            <th class="table-secondary text-dark"><strong>Address</strong></th>
            <th class="table-info text-dark"><strong>City</strong></th>
            <th class="table-danger text-dark"><strong>State</strong></th>
            <th class="table-warning text-dark"><strong>Email</strong></th>
            <th class="table-success text-dark"><strong>Conatact No.</strong></th>
            <th class="table-secondary text-dark"><strong>Account No.</strong></th>
            <th class="table-info text-dark"><strong>Connection Type</strong></th>
            <th class="table-danger text-dark"><strong>Action</strong></th>
            <th class="table-light text-dark"><strong>Delete</strong></th>
            
       </tr>
     </thead>
<tbody>
<?php
$id=1;
$sel_query="SELECT * from register ORDER BY id asc;";
$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_assoc($result)) {?>
<tr>
        <td align="center"><?php echo $id; ?></td>
        <td align="center"><?php echo $row["fname"]; ?></td>
        <td align="center"><?php echo $row["lname"]; ?></td>
        <td align="center"><?php echo $row["address"]; ?></td>
        <td align="center"><?php echo $row["city"]; ?></td>
        <td align="center"><?php echo $row["state"]; ?></td>
        <td align="center"><?php echo $row["email"]; ?></td>
        <td align="center"><?php echo $row["phone"]; ?></td>
        <td align="center"><?php echo $row["account"]; ?></td>
        <td align="center"><?php echo $row["connection"]; ?></td>

        <td align="center"><a href="update.php?id=<?php echo $row["id"]; ?>" class="btn bnt-md btn-outline-warning" name="edit">Edit</a></td>
            <td align="center"> <span class='delete btn btn-md btn-outline-danger' id='del_<?php echo $row["id"]; ?>'>Delete</span></td>
</tr>
<?php $id++; } ?>
</tbody>
</table>
</form>
<?php 
   include('footer.php');
 ?>
 <script>
  $('.delete').click(function(){
   var el = this;
   var id = this.id;
   var splitid = id.split("_");

   // Delete id
   var deleteid = splitid[1];
 
   // AJAX Request
   $.ajax({
     url: 'delete.php',
     type: 'POST',
     data: { id:deleteid },
     success: function(response){

       if(response == 1){
	 // Remove row from HTML Table
	 $(el).closest('tr').css('background','yellow');
	 $(el).closest('tr').fadeOut(800,function(){
	    $(this).remove();
	 });
      }else{
	 alert('Invalid ID.');
      }

    }
   });

 });

});
 </script>
</body>
</html>


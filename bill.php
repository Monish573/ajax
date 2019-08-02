<?php
include('db.php');
 session_start();
$row= $_GET['id'];
$query= "SELECT * FROM register WHERE `id` = '".$row."'";
$result = mysqli_query($conn,$query);
 ?>
 <head>
 <style>
 body
 {
    background:-webkit-linear-gradient(left,#ff9966,#b3b3b3,#ff9966);
 }
 </style>
</head>
 <body>
	<?php while($new = mysqli_fetch_row($result)) { ?>

		
	   </div>
 <div class="invoice container">
	   	<h4 style="color:orange; font-size:2rem;"><marquee behavior="alternate" direction="left">Hello! &nbsp; &nbsp;<?php echo $new["1"]; ?>&nbsp;<?php echo "Today is ".date("d/m/y")."<br>"; ?></marquee></h4>
     <div class="container mt-5 mb-5" align="center">
          	<h2 class="display-3">Udaipur vidhyut Nagar</h2>
          		<h3 align="center" class="display-3 text-danger alert-danger">User Invoice</h3>
          	<br>
          	<br>
               <div class="row">
               	    <div class="col-lg-6">
               	    	   	<table width="100" class="table table-hover">
						    <tbody>
						      <tr>
						      	<td colspan="2"><h4><b>Bill To:</b></h4></td>
						      </tr>
						      <tr>
						        <td> Name:</td>
						        <td><?php echo $new["1"]; ?>&nbsp;<?php echo $new["2"]; ?></td>
						      </tr>
						        <tr>
						        <td>Address:</td>
						        <td><?php echo $new["3"]; ?></td>
						      </tr>
						        <tr>
						        <td>City:</td>
						        <td><?php echo $new["4"]; ?></td>
						      </tr>
                              <tr>
						        <td>State:</td>
						        <td><?php echo $new["5"]; ?></td>
						      </tr>
						    </tbody>
						  </table>
				 
                    </div>
                    <div class="col-lg-6">
                    	<table width="100" class="table table-hover">
						    <tbody>
						    	 <tr>
						        <td><h4><b>Invoice No:</b></h4></td>
						        <td><?php echo $new["0"]; ?></td>
						      </tr>
						       <tr>
						        <td>Date:</td>
						        <td><?php echo date("d/m/y"); ?></td>
						      </tr>
						        <tr>
						        <td>Connection Type:</td>
						        <td><?php echo $new["10"]; ?></td>
						      </tr>
						      <tr>
						        <td>Email:</td>
						        <td><?php echo $new["6"]; ?></td>
						      </tr>
						          <tr>
						        <td>Contact No:</td>
						        <td><?php echo $new["8"]; ?></td>
						      </tr>
						    </tbody>
						  </table>
                       </div>
                   </div>
               <?php } ?>

<?php 
                   $query= "SELECT * FROM billing WHERE `id` = $row";
					$result = mysqli_query($conn,$query);
					 ?>
                   <h4 class="display-5 mt-4 container" align="left"><b>Bill Details:</b></h4>
                   <?php while($new = mysqli_fetch_row($result)) { ?>
                  <div class="row">
               	    <div class="col-lg-6">
                       <table class="table" >
						    <tbody>
						    	 <tr>
						        <td>Billing Period:</td>
						        <td><?php echo $new['2']; ?></td>
						      </tr>
						       <tr>
						        <td>This Month Unit:</td>
						        <td><?php echo $new['4']; ?></td>
						      </tr>
						        <tr>
						        <td>Last Month Unit:</td>
						        <td><?php echo $new['5'] ?></td>
						      </tr>
						    </tbody>
						  </table>
						</div>
						   <div class="col-lg-6">
                       <table class="table" >
						    <tbody>
						    	 <tr>
						        <td>Per unit Charge:</td>
						        <td><?php echo $new['6'] ?></td>
						      </tr>
						         <tr>
						        <td>Last Paid On:</td>
						        <td><?php echo $new['3']; ?></td>
						      </tr>
						        <tr>
						        <td>Total:</td>
						        <td>Rs.<?php echo  $new['8'] ?></td>
						      </tr>
						         <tr>
						        <td>Last Date of Submit:</td>
						        <td><?php echo $new['7']; ?></td>
						      </tr>
						    </tbody>
						  </table>
						</div>
					</div>

	<?php  } ?> 
		                       
		                       <center><a href="#" class="btn btn-md btn-outline-warning" >Print</a></center>
		                   </div>
		               </div>
		               <br>
		               <br>   	

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="js/bootstrap.min.js"></script>
</body>
<?php include('footer.php'); ?>
</html>

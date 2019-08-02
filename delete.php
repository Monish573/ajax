<?php
require('db.php');
$id=$_REQUEST['id'];
if($id > 0){

  // Check record exists
  $check= mysqli_query($conn,"SELECT * FROM register WHERE id=".$id);
  $totalrows = mysqli_num_rows($check);

  if($totalrows > 0){
    // Delete record
    $query = "DELETE FROM register WHERE id=$id"								;
    mysqli_query($conn,$query);
    echo 1;
    exit;
  }
}

echo 0;
exit;
?>
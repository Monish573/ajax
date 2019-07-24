<?php
include('db.php');
 $sql="SELECT myguest2.Name,
 task.Id,
 task.Title,
 task.Assignned,
 task.Description
 from `myguest2` INNER JOIN `task` ON myguest2.Id = task.Assignned ";
//  if($result=$conn->query($sql)){
 if($result=mysqli_query($conn, $sql)){
        if(mysqli_num_rows ($result)> 0)
        {   echo "<div class='jumbotron text-center'>";
            echo "<h1>ADD Task && Update Task </h1> ";
            echo "</div>";
            echo "<table width='550' border='2' align='center' bgcolor='antiquewhite'>";
            echo "<tr>";
            echo "<th>Id</th>";
            echo "<th>Title</th>";
            echo "<th>Description</th>";
            echo "<th>Assignned</th>";
            echo "<th>Delete</th>";
            echo "<th>Update</th>";
            echo "</tr>";
            // while($row=$result1->fetch_assoc()) 
         while($row=$result->fetch_assoc())
        {
          echo "<tr>";
               echo "<td>".$row['Id']. "</td>";
               echo "<td>".$row['Title']. "</td>";
               echo "<td>".$row['Description']. "</td>";
               echo "<td>".$row['Name']. "</td>";?>
              <td> <button type="button" class="btn btn-warning"><a href="delete.php?Id=<?php echo $row['Id'] ?>" >Delete</button></td>
             <td> <button type="button" class="btn btn-dark"><a href="formupdate.php?Id=<?php echo $row['Id'] ?>">Update</button></td> 
               <?php  echo "</tr>";

        }
        echo "</table>";
      }
    else
    {
        echo "0 results";
    }
  }
  else
  {
    echo "could not able to excecute $sql.".mysqli_error($conn);
  }
?>
<html>
<head>
<title>Multiple Form </title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style>
body
{
    background:-webkit-linear-gradient(#ff4d4d, #800000,#aaff00,#800000);
}
.jumbotron
{
	background-image: url('images/dawn-hd-wallpaper-landscape-36717.jpg');
	background-size: cover;
	background-repeat: no-repeat;
    color: #aaff00;
}
</style>
</head>
<body>
<a href="formupdate.php" class="btn btn-block btn-outline-success" type="button"> Add task </a>
</form>
</body>
</html>


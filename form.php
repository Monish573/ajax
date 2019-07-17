<?php
include('db.php');
$sql="SELECT * FROM task";
        $result=$conn->query($sql);
        if($result->num_rows > 1)
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
        while($row=$result->fetch_assoc())
        {
          echo "<tr>";
               echo "<td>".$row['Id']. "</td>";
               echo "<td>".$row['Title']. "</td>";
               echo "<td>".$row['Description']. "</td>";
               echo "<td>".$row['Assignned']. "</td>";?>
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
<!-- <script>
    $(document).ready(function(){
    $('input.typeahead').typeahead({
        name: 'typeahead',
        remote:'search.php?key=%QUERY',
        limit : 10
    });
});
    </script> -->
</body>
</html>


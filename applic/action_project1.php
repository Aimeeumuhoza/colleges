
<?php
$conn= mysqli_connect('localhost','root','','application');
//check for connection
if(!$conn){
  die("connection failed");
}
else{

  }
$sql = "SELECT * FROM bachelor";//your table called collage
$result = mysqli_query($conn,$sql);

if(!$result) {
echo "Something is wrong".mysqli_error($conn);}
    // output data of each row
else{?><center>
<table border="3" style="margin-left: 30%; background-color:;margin-top:70px;"cellspacing="4">
  <tr>
     <th>id</th>
 <th>college</th>
 <th>program</th>
 <th>fees</th>
 <th colspan="3">Action</th>
  </tr></center>
<?php
    while($row = mysqli_fetch_array($result)) {?>


<tr>
<td><?php echo $row["id"]; ?></td>
   <td><?php echo $row["college"]; ?></td>
   <td><?php echo $row["program"]; ?></td>
   <td><?php echo $row["fees"]; ?></td>
<td><a href="view_Details_project1.php?id=<?php echo $row['id']; ?>"><button>View</a></button></td>
<td><a href="update_project1.php"><button>Update</a></button></td>
<td><a href="userdelete_project1.php?id=<?php echo $row['id']; ?>"><button>Delete</a></button></td>
</tr>
<?php
}
echo "</table>";
  }
   //
?>

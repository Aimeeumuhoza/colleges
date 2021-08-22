
<?php
$conn= mysqli_connect('localhost','root','','application');
//check for connection
if(!$conn){
  die("connection failed");
}
else{

  }
$sql = "SELECT * FROM registrationform";//your table called collage
$result = mysqli_query($conn,$sql);

if(!$result) {
echo "Something is wrong".mysqli_error($conn);}
    // output data of each row
else{?><center>
<table border="3" style="margin-left: 30%; background-color:;margin-top:70px;"cellspacing="4">
  <tr>
     <th>id</th>
 <th>fname</th>
 <th>lname</th>
 <th>age</th>
  <th>gender</th>
 <th>telnum</th>
 <th>nationality</th>
  <th>grade</th>
 <th>degree</th>
 <th>program</th>
 <th>college</th>
 <th colspan="3">Action</th>
  </tr></center>
<?php
    while($row = mysqli_fetch_array($result)) {?>


<tr>
<td><?php echo $row["id"]; ?></td>
   <td><?php echo $row["fname"]; ?></td>
   <td><?php echo $row["lname"]; ?></td>
   <td><?php echo $row["age"]; ?></td>
    <td><?php echo $row["gender"]; ?></td>
   <td><?php echo $row["telnum"]; ?></td>
   <td><?php echo $row["nationality"]; ?></td>
    <td><?php echo $row["grade"]; ?></td>
   <td><?php echo $row["degree"]; ?></td>
   <td><?php echo $row["program"]; ?></td>
    <td><?php echo $row["college"]; ?></td>
 <td><a href="view_Details_applicationform.php?id=<?php echo $row['id']; ?>"><button>View</a></button></td>

<td><a href="userdelete_applicationform.php?id=<?php echo $row['id']; ?>"><button>Delete</a></button></td>
</tr>
<?php
}
echo "</table>";
  }
   //
?>

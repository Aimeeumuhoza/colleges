<?php
   $conn= mysqli_connect('localhost','root','','application');
   //check for connection
   if(!$conn){
     die("connection failed");
   }
   else{
  
     }
   
   $r = "DELETE FROM masters WHERE id =".$_GET['id'];
   
   $dx = mysqli_query($conn, $r);
   if(!$dx){
	   echo "Failed ".mysqli_error($conn);
   }else{
	   header('location:action_project2.php');
   }
       
   
?>
<?php
 $conn= mysqli_connect('localhost','root','','application');
 //check for connection
 if(!$conn){
   die("connection failed");
 }
 else{

   }
   
   $r = "SELECT * FROM contactus WHERE id=".$_GET['id'];
   
   $dx = mysqli_query($conn, $r);
   if(!$dx){
	   echo "Failed";
   }
   while($d = mysqli_fetch_array($dx)){
	   echo "id: ".$d["id"]."<br/>";
	   echo "email: ".$d["email"]."<br/>";
	   echo "subject: ".$d["subjects"]."<br/>";
      echo "message: ".$d["messages"]."<br/>";
	   
   }
   
?>
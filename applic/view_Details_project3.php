<?php
 $conn= mysqli_connect('localhost','root','','application');
 //check for connection
 if(!$conn){
   die("connection failed");
 }
 else{

   }
   
   $r = "SELECT * FROM doctorate WHERE id=".$_GET['id'];
   
   $dx = mysqli_query($conn, $r);
   if(!$dx){
	   echo "Failed";
   }
   while($d = mysqli_fetch_array($dx)){
	   echo "id: ".$d["id"]."<br/>";
	   echo "college: ".$d["college"]."<br/>";
	   echo "program: ".$d["program"]."<br/>";
	   echo "fees: ".$d["fees"]."<br/>";
      
	   
   }
   
?>
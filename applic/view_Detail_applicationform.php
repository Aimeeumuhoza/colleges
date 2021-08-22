<?php
 $conn= mysqli_connect('localhost','root','','application');
 //check for connection
 if(!$conn){
   die("connection failed");
 }
 else{

   }
   
   $r = "SELECT * FROM registrationform WHERE id=".$_GET['id'];
   
   $dx = mysqli_query($conn, $r);
   if(!$dx){
	   echo "Failed";
   }
   while($d = mysqli_fetch_array($dx)){
	   echo "id: ".$d["id"]."<br/>";
	   echo "fname: ".$d[fname:"]."<br/>";
	   echo "lname: ".$d["lname"]."<br/>";
      echo "age: ".$d["age"]."<br/>";
       echo "gender: ".$d["gender"]."<br/>";
	   echo "telnum: ".$d["telnum"]."<br/>";
	   echo "nationality: ".$d["nationality"]."<br/>";
      echo "grade: ".$d["grade"]."<br/>";
	    echo "degree: ".$d["username"]."<br/>";
	   echo "program: ".$d[program"]."<br/>";
      echo "college: ".$d["college"]."<br/>";
	   
   }
   
?>
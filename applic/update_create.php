<?php
   include("db_connect.php");
   $conn= mysqli_connect('localhost','root','','application');

   if(isset($_GET['id'])){
	   $_id=$_GET['id'];
   }
   else
   {
       $_id=0;
   }
    $r = "SELECT * FROM user WHERE id=".$_id;
   
   $dx = mysqli_query($conn,$r);
   if(!$dx){
	   echo "Failed";
   }
   if($d = mysqli_fetch_array($dx)){
	   ?>
	   <form action="" method="post">
	   <input type="hidden" name ="id" value="<?php echo $d['id'];?>" placeholder="id"/>

		  <input type="text" name ="username" value="<?php echo $d['username'];?>" placeholder="username"/>

		  <br/>

         <input type="text" name ="email" value="<?php echo $d['email'];?>" placeholder="email"/>
		  <br/> 		  
			
		    
			<input type="submit" name ="update" value="Update"/>
		
		</form> 

	   <?php  
	     if(isset($_POST['update'])){
			 $username = $_POST['username'];
			 $email = $_POST['email'];
			
			 $id=$_GET['id'];
			 $w = "UPDATE user SET username='$username', email='$email';
			 WHERE id=".$_POST['id'];
			 
			 $r = mysqli_query($conn,$w);
			 if(!$r){
				 echo "error ";
			 }else{
				 echo "Updated successfully";
			 }
			 
		 }
   }
?>
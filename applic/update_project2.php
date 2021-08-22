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
    $r = "SELECT * FROM masters WHERE id=".$_id;
   
   $dx = mysqli_query($conn,$r);
   if(!$dx){
	   echo "Failed";
   }
   if($d = mysqli_fetch_array($dx)){
	   ?>
	   <form action="" method="post">
	   <input type="hidden" name ="id" value="<?php echo $d['id'];?>" placeholder="id"/>

		  <input type="text" name ="college" value="<?php echo $d['college'];?>" placeholder="college"/>

		  <br/>

         <input type="text" name ="program" value="<?php echo $d['program'];?>" placeholder="program"/>
		  <br/> 
           <input type="text" name ="fees" value="<?php echo $d['fees'];?>" placeholder="fees"/>
		  <br/> 		  		  
			
		    
			<input type="submit" name ="update" value="Update"/>
		
		</form> 

	   <?php  
	     if(isset($_POST['update'])){
			 $college = $_POST['college'];
			 $program= $_POST['program'];
			$fees = $_POST['fees'];
			 $id=$_GET['id'];
			 $w = "UPDATE masters SET college='$college', program='$program',fees='$fees;
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
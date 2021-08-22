
<?php 

include('db_connect.php');
if(isset($_POST['submit'])){


  $username=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];
  $confirm=$_POST['confirm'];

	$sql="INSERT INTO users(username,email,pwd,confirm) VALUES('$username','$email','$password','$confirm')";

	$result=mysqli_query($conn,$sql);

	if($result){
           header("location:login.php");
        }else{
            echo 'failed to send' . mysqli_error($conn);  
        }

             
    mysqli_close($conn);

}
?>




<html>

    <head><title>signin Form</title>
    <link rel="stylesheet" href="css/style2.css">
    </head>
    <body>
    <section class="signin">
      <center><h1 > Signup</h1></center>
      <div class="container">
          <div class="container-box">
            <h3 >Create profile</h3>
           
    </div>
    <div class="container-box">
     
        <form class="form" action="create.php" method="POST" >
            
            <label>username</label>
            <input type="text" name="username"><br><br><br>
            
            <input type="text" name="email" placeholder="Email"><br><br>
             <input type="password" name="password" placeholder="Password">
           <label for="psw-repeat"><b>confirmation</b></label>
             <input type="password"placeholder="repeat password" name="confirm"required maxlength="20">
            <div class="input-field">
           <button name="submit">Sign-Up</a></button>
        </div>
        
        </form> 
       
    </div>
    </div>
    </section>
    </body>
    </html>
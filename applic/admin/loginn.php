<?php

  	$errors = array('login' => '', 'username' => '', 'password' => '', 'incorrect' => '');
if(isset($_POST['submit'])){
	if(empty($_POST['Admin'])){
		$errors['login'] = 'You must choose between admin and user';}
	if(empty($_POST['username'])){
		$errors['username'] = 'A username is required';}
	if(empty($_POST['password'])){
		$errors['password'] = 'password is required';}
  $person = $_POST['Admin'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  if($person == 'Admin'){
	if($username === 'creater' && $password === 'creater250'){

		header('location:dashboard.php');
	  }else{
		$errors['incorrect'] = 'Username Or Password is incorrect!';
	  }

  } else if($person == 'user'){
    include('db_connect.php');
    // write query 
    $sql = "SELECT id FROM signup WHERE username= '$username' and passwords = '$password'";
    
    // get the result set (set of rows)
    $result = mysqli_query($conn, $sql);
    
    // fetch the resulting rows as an array
    $account = mysqli_fetch_all($result, MYSQLI_ASSOC);
    
    // check how many results
    $count = mysqli_num_rows($result);
    if($count == 1){
      header('Location: project.php');

    }
  else{
  echo 'username or password is incorrect';

  }
	mysqli_free_result($result);

	// close connection
	mysqli_close($conn);

  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LOG IN</title>
  <style>
      form {   
          border: 3px solid #f1f1f1;   
      }   
   input[type=text], input[type=password] {   
          width: 50%;   
          margin: 8px 0;  
          padding: 12px 20px;   
          display: inline-block;   
          border: 2px ;   
          box-sizing: border-box;  
          border-radius: 20px; 
      }  
   .button:hover {   
          opacity: 0.7; 
          background-color: black;
           
      }   
               
   .container {   
          padding: 15px; 
          width: 50%;  
          height: 300px;
          background-color: lightblue; 
          padding-top: 100px;
      }   
      .cancelbtn:hover{
        background-color: black;
      }
      .submit:hover{
        background-color: black;
      }
  </style>
    
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <!-- ======================= Header================= -->
  <header>
    <nav class="nav-menu">
      <ul >
        <li><a href="home.php">Home</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="login.php">LOGIN</a></li>
      </ul>
    </nav>
  </header>
<!-- ================================== Section Home============== -->
<center>
 <section>
   
       <form action="login.php" method="POST">  
    <div class="container"> 

    <label for="Admin"name="Admin">Admin</label>
    <input type="radio" name="Admin" value="Admin">

    <label for="user">user</label>

    <input type="radio" name="Admin" value="user"><br>
    <p style="color:red"><?php echo $errors['login']; ?></p> 

        <input type="text" placeholder="Enter Username" name="username">  
        <p style="color:red"><?php echo $errors['username'];?></p>

        <input type="password" placeholder="Enter Password" name="password"> <br/>

        <p style="color:red"><?php echo $errors['password'];?></p>
        
        <button type="submit"class="button submit" name="submit"> Login</button>  
        <p style="color:red"><?php echo $errors['incorrect'];?></p>
        <button type="submit"class="button submit" name="submit"><a href="signup.php">Sign Up </a></button>
        <a href="#" name="forgot">Forgot  password? </a>   
    </div> 
    </center>
</form>
</section>

</body>
</html>

<?php

// Create connection
$db_conn =mysqli_connect('localhost', 'root','','application');
//check connection
if(!$db_conn)
{
    echo 'connection error:'.mysqli_connect_error();
}

//form Validation
$username=$password='';
$errors=array('username'=>'','password'=>'','incorrect'=>'');
if(isset($_POST['submit']))
{
    //check email
    if(empty($_POST['username']))
    {
        $errors['username']='An username is required';
    }
    else{
        $username=$_POST['username'];
        if (!filter_var($username, FILTER_VALIDATE_EMAIL)) {
            $errors['username'] = "Invalid email format";
          }
    }
      //check password
      $password=$_POST['password'];
      if(empty($_POST['password']))
      {
          $errors['password']='Password is required';
          
      } 

     $sql="SELECT id FROM user WHERE   username='$username' and passwords='$password' ";
     //getting result
     $result=mysqli_query($conn,$sql);
     //fetching results rows in array
     $users=mysqli_fetch_all($result,MYSQLI_ASSOC);
     //checking how many answers
     $count=mysqli_num_rows($result);
     // if results match
     if($count==1){




     // redirecting a user 
      if(array_filter($errors))
      {
          //check errors
      }
        else{
            //no errors
              header('Location:application form.php');
          }
        }
        else{
           $errors['incorrect']='username or Password is incorrect';
        }
        
}


?>


<html>
<head><title>Login Form</title>
<link rel="stylesheet" href="css/style1.css">
</head>
<body>
<section class="login">
  <center><h1 >Login or Register</h1></center>
  <div class="container">
      <div class="container-box">
        <h3 >Create profile</h3>
        <p>
           Creating a web profile is quick and easy.
          You’ll gain access to manage your profile and preferences, 
          view brochures, book events, bookmark content, comment on articles, 
          and make an application. To fill out the short form,
          click on “Create profile” below.
        </p>
</div>
<div class="container-box">
  <h3 >Already registered? Please log in.</h3>

    <form method="POST" action="application form.php" class="form" >
    
        <input type="text" name="username" placeholder="username">

      <input type="password" name="password" placeholder="Password">
      <div class="input-field">
      
      <button type="submit" class="btn" name="login" >login </button>

  <p> not yet a member?  <button><a href="create.php">sign up</a></button></p>
      

    </div>
    <a href="forgot.php">forgot password</a>
   

    </form>

  
</div>
</div>
</section>
</body>
</html>
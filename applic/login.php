
<?php
// Create connection

//check connection
$conn =mysqli_connect('localhost', 'root','','application');
  	$errors = array('login' => '', 'username' => '', 'password' => '','incorrect' => '');
 $login=$username=$password="";
if(isset($_POST['submit'])){

	if(empty($_POST['login'])){

		$errors['login'] = 'You must log in';
  }

    if(empty($_POST['username'])){

		$errors['username'] = 'An username is required';}

	if(empty($_POST['password'])){
		$errors['password'] = 'An password is required';}
    
    $person = $_POST['login'];
    $username = $_POST['username'];
    $password = $_POST['password'];

  if($person == 'admin'){

	if($username === 'umuhoza' && $password === 'admin'){

		header('location:admin dash.php');
	  }
    else{

	    echo 'Username Or Password is incorrect!';
	  }

  
  }

     else if($person == 'user'){
       
       $db_conn =mysqli_connect('localhost', 'root','','application');
       if(!$db_conn)
{
    echo 'connection error:'.mysqli_connect_error();

  }

   $sql="SELECT id FROM user WHERE username= '$username' and passwords='$password' ";
     //getting result
     $result=mysqli_query($conn,$sql);
     //fetching results rows in array
     $user=mysqli_fetch_all($result ,MYSQLI_ASSOC);
     //checking how many answers
     $count=mysqli_num_rows($result);
     // if results match

      if($count == 1){	

		header("location:indexx.php");

		}else {

		$error = "Your Username or Password is invalid";
    echo $error;
		 }
	// free the $result from memory (good practise)
	mysqli_free_result($result);

}
}



// form Validation
// $username=$password='';

//  $errors=array('username'=>'','password'=>'','incorrect'=>'');
//    if(isset($_POST['submit']))

//    {
//     //check email
//     if(empty($_POST['username']))
//     {
//         $errors['username']='An username is required';
//     // }
//     // else{
//     //     $username=$_POST['username'];

//     //     // if (!filter_var($username, FILTER_VALIDATE_EMAIL)) {

//     //     //     $errors['username'] = "Invalid email format";
//     //     //   }
//     }
//       //check password
//       $password=$_POST['password'];
//       if(empty($_POST['password']))
//       {
//           $errors['password']='Password is required';
          
//       } 


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

    <form method="POST" action="login.php" class="form" >

     <input type="radio" name="login" value="admin">
    <label name="login" for="admin">Admin</label>
     
  
	 <input type="radio" name="login" value="user">
    <label name="login" for="user">user</label><br><br>
       
   
    
       <!-- <input type="text" name="username" placeholder="username"> -->
       
username:<br/><input type="text" name="username" value=""  onmouseover="mousover(this)" onmouseout="mousout(this)"> <br/><br/>
   
        <p><?php echo htmlspecialchars($errors['username']); ?> </p>

       Password:<br/><input type="password" name="password" onmouseover="mousover(this)" onmouseout="mousout(this)"> <br/>

          <p><?php echo  htmlspecialchars($errors['password']);  ?> </p>
           <p><?php echo  htmlspecialchars($errors['incorrect']);  ?> </p>

        <button class="subm" style="height: 12%;width: 15%;" type="submit" name="submit" value="login" onclick="submt()"onmouseover="mousover1(this)" onmouseout="mousout1(this)" ><a href="application form.php"><b>Log in</b></button>

               <p><?php echo  htmlspecialchars($errors['login']);  ?> </p>
  <!--<input type="password" name="password" placeholder="Password"> -->
      <div class="input-field">
      
     <!-- <button type="submit" class="btn" name="login" >login </button>-->

  <p> not yet a member?  <button type="submit" name="login"><a href="create.php">sign up</a></button></p>
      

    </div>
    <a href="forgot.php">forgot password</a>
   

    </form>

  
</div>
</div>
</section>
</body>
</html>
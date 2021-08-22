<?php

// Create connection
$conn =mysqli_connect('localhost', 'admin','admin','electronics');
//check connection
if(!$conn)
{
    echo 'connection error:'.mysqli_connect_error();
}

//form Validation
$email=$password='';
$errors=array('email'=>'','password'=>'','incorrect'=>'');
if(isset($_POST['submit']))
{
    //check email
    if(empty($_POST['email']))
    {
        $errors['email']='An email is required';
    }
    else{
        $email=$_POST['email'];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = "Invalid email format";
          }
    }
      //check password
      $password=$_POST['password'];
      if(empty($_POST['password']))
      {
          $errors['password']='Password is required';
          
      } 

     $sql="SELECT id FROM users WHERE email='$email' and passwords='$password' ";
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
              header('Location:home.php');
          }
        }
        else{
           $errors['incorrect']='Email or Password is incorrect';
        }
        
}


?>

<html>
<head>
    <link rel="stylesheet" href="social.css">
    <link rel="stylesheet" href="button.css">
    <link rel="stylesheet" href="gridhome.css">
    <link rel="stylesheet" href="search.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="footter.css">
    <script src="https://kit.fontawesome.com/07796c0bdb.js" crossorigin="anonymous"></script>
    <script src="loop.js" ></script>
    <script src="index.js"></script>
<title>
</title>
</head>
<body style="background-color: white;">
    <div class="topnav">
    <nav style="font-size: xx-large;">
        <ul class="text-alg" style="background-color: rgb(14, 59, 80);">
            <input type="text" placeholder="Search...">
            <a href="Home.php">Home</a>
            <a  href="product.php">Products</a>
            <a  href="#">Profile</a>
            <a href="register.php">Sign_Up</a>
                     <a href="Login.php">Login</a>
                
    </ul>
    </nav>
</div>
<div class="login" style="border-radius: 100px;display: block;">
    <form class="frm" action="login.php" method="POST">
        Email:<br/><input type="text" name="email" value="<?php echo $email; ?>"  onmouseover="mousover(this)" onmouseout="mousout(this)"> <br/><br/>
        <p style="color:red"><?php echo htmlspecialchars($errors['email']); ?> </p>
       Password:<br/><input type="password" name="password" onmouseover="mousover(this)" onmouseout="mousout(this)"> <br/>
       <p style="color:red"><?php echo  htmlspecialchars($errors['password']);  ?> </p>
       <p style="color:red"><?php echo  htmlspecialchars($errors['incorrect']);  ?> </p>
        <input class="subm" style="height: 12%;width: 15%;" type="submit" name="submit" value="Login"onclick="submt()"onmouseover="mousover1(this)" onmouseout="mousout1(this)" >
<div style="border-radius: 100px;">
<p style="color:rgb(14, 59, 80)">You don't have an account?</p>
<a style="padding: 5px;color:rgb(14, 59, 80); background-color:green;width: 25%;border-radius: 50px; color:black;text-decoration: none;" href="register.php" onmouseover="mousover1(this)" onmouseout="mousout1(this)">Register</a>
<br/> <br/>
</div>
</form>
</div>

<div class="footer-basic">
    <footer>
        <div class="social "><a href="https://www.instagram.com/abdulkarim_bz/"><i class="icon ion-social-instagram"></i></a>
            <a href="https://www.linkedin.com/in/bazambanza-abdulkarim-a801b1187/"><i class="icon ion-social-linkedin"></i></a>
            <a href="https://twitter.com/bzkarim4"><i class="icon ion-social-twitter"></i></a>
            <a href="https://www.facebook.com/bazambanza.abdulkarimu"><i class="icon ion-social-facebook"></i></a></div>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="home.php">Home</a></li>
            <li class="list-inline-item"><a href="product.php">Products</a></li>
            <li class="list-inline-item"><a href="#">About</a></li>
            <li class="list-inline-item">Contact:+250780514840</li>
            <li class="list-inline-item"><a href="#">Terms</a></li>
            <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
        </ul>
        <p class="copyright">UNIQUE ELC SHOP &copy 2021 </p>
    </footer>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
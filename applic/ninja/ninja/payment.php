<?php

include 'config.php';
error_reporting(0);
if(isset($_POST['submit'])){
    $bookingid= $_POST['bookingid'];
    $amountpaid = $_POST['amountpaid'];
    $paymentdate= $_POST['paymentdate'];
          $sql = "INSERT INTO payment(payment_id,booking_id,amount_paid,payment_date)VALUES('',\"$bookingid\",\"$amountpaid\",\"$paymentdate\")";
        $result = mysqli_query($conn, $sql);
        if($result){
            echo "<script>alert('successfully registered')</script>";
        }else{
            echo 'failed to register' . mysqli_error($conn);  
        }
      }
  


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Register</title>
</head>
<body>
    <div class="container">
        <form class="login-email" action="" method="POST">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register payment</p>
            <div class="input-group">
                <input type="text" placeholder="bookingid" name="bookingid" value="" required>
            </div>
            <div class="input-group">
                <input type="text" placeholder="amountpaid" name="amountpaid" value="" required>
            </div>
       
            <div class="input-group">
                <input type="text" placeholder="paymentdate" name="paymentdate" value="" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Register</button>
            </div>
        </form>
    </div>
</body>
</html>
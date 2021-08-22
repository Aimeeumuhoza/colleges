<?php

include 'db_connect.php';

error_reporting(0);

if(isset($_POST['submit']));{
    $fname= $_POST['fname'];
    $lname = $_POST['lname'];
    $age= $_POST['age'];
    $gender= $_POST['gender'];
    $telnum= $_POST['number'];
    $nationality= $_POST['nationality'];
    $grade= $_POST['grades'];
    $degree= $_POST['slct1'];
    $program= $_POST['program'];
    $college= $_POST['college'];

          $sql = "INSERT INTO  registrationform (fname,lname,age,gender,telnum,nationality,grade,degree,program,college)
          VALUES('$fname','$lname','$age','$gender','$telnum','$nationality','$grade','$degree','$program','$college')";

        $result = mysqli_query($conn, $sql);
        
        if($result){
            echo "<script>alert('successfully registered')</script>";
			header("location:indexx.php");
        }else{
            echo 'failed to register' . mysqli_error($conn);  
        }
      }

      ?>

<html>
<head>
<title>registration form</title>
</head>
<body bgcolor="grey">


<center ><form action="application form.php" method="POST">
<h2> fill the following form </h2>
<label>firstname</label>
<input type="text" name="fname" value="firstname" size="20px">firstname<br><br><br>
<label>lastname</label>
<input type="text" name="lname" value="lastname">lastname<br><br><br>
<label>age</label>
<input type="number" name="age" value="age">age<br><br>
<h3>select your gender:</h3>
<input type="radio" name="gender" value="male">male<br>
<input type="radio" name="gender" value="female">female<br>

<label>telephone numbers</label>
<input type="number"  name="number" value="telnum">telnum<br><Br>
<label>nationality</label>
<input type="text" name="nationalit" value="nationalit">nationalit<br><br>
<label> <h3>grades</h3> </label><br>
<input type="checkbox" name="grades" value="A">A
<input type="checkbox" name="grades"  value="grades">B<br><br>
<input type="checkbox" name="grades"  value="grades">C
<input type="checkbox"name="grades"   value="grades">D<br><br>
<label>DEGREE :</label>
            <select name="slct1" id="slct1" onchange="populate('slct1','slct2')">
                <option value=""></option>
                <option value="bachelor">bachelor</option>
                <option value="master's">master's</option>
                 <option value="doctorate">doctorate</option>
                <option value="proffessor">proffessor</option>
				
            </select>
            <label>PROGRAM:</label>
            <select name="program" id="slct2" onchange="populate1(this.id,'slct3')"></select>
			<label>COLLEGE:</label>
            <select name="college" id="slct3" ></select>
	      
               <script >
                   function populate(s1,s2){
          var s1= document.getElementById(s1);
          var s2=document.getElementById(s2);
          s2.innerHTML="";
          
          if(s1.value=="bachelor"){
              var optionArray = ["|","BUSINESS|BUSINESS","AGRICULTURE|AGRICULTURE","TECHNOLOGY|TECHNOLOGY"];
          }
          else if(s1.value=="master's"){
              var optionArray = ["|","TECHNOLOGY|TECHNOLOGY","LAW|LAW","POLITICAL SCIENCE|POLITICAL SCIENCE"];
          }
          else if(s1.value=="doctorate"){
              var optionArray = ["|","MEDICAL SCIENCE|MEDICAL SCIENCE","MENTAL HEALTH|MENTAL HEALTH"];
          }
          else if(s1.value=="proffessor"){
              var optionArray = ["|","LAW|LAW","POLITICAL SCIENCE|POLITICAL SCIENCE"];
          }
		  
          for(var option in optionArray){
              var pair= optionArray[option].split("|");
              var newOption=document.createElement("option");
              newOption.value = pair[0];
              newOption.innerHTML = pair[1];
              s2.options.add( newOption);
          }
          }
		        function populate1(s3,s4){
          var s3= document.getElementById(s3);
          var s4=document.getElementById(s4);
          s4.innerHTML="";
          
          if(s3.value=="BUSINESS"){
		  
              var optionArray = ["|","trent|trent", "st_Andrew|st_Andrew", "london business school|london business school"];
          }
          else if(s3.value=="AGRICULTURE"){
              var optionArray = ["|", "pursue|pursue", "massachusette|massachusette"];
          }
          else if(s3.value=="TECHNOLOGY"){
            var optionArray = ["|","marian|marian", "lake|lake", "atlantic|atlantic"];
         }
		 else if(s3.value=="LAW"){
            var optionArray = ["|","massachusette|massachusette", "atlantic|atlantic"];
          }
		  else if(s3.value=="POLITICAL SCIENCE"){
            var optionArray = ["|","ELK|ELK", "massachusette|massachusette"];
                }
		  else if(s3.value=="MEDICAL SCIENCE"){
            var optionArray = ["|","harvard|harvard"];
          }
		  else if(s3.value=="MENTAL HEALTH"){
            var optionArray = ["|","harvard|harvard", "massachusette|massachusette", ];
          }
		  else if(s3.value=="LAW"){
            var optionArray = ["|","purseu|pursue"];
          }
		  else if(s3.value=="POLITICAL SCIENCE"){
            var optionArray = ["|","atlantic|atlantic"];
          }
		  
          for(var option in optionArray){
              var pair= optionArray[option].split("|");
              var newOption=document.createElement("option");
              newOption.value = pair[0];
              newOption.innerHTML = pair[1];
              s4.options.add(newOption);
			  console.log(s3.value);
          }
          }
          
              </script>
    <br/> <br/>     
    
     <button  type="submit" name="submit">submit</button>

</form></center >


</body>
</html>
<?php 
  $con = mysqli_connect("localhost","root","","yesplus");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $email= mysqli_real_escape_string($con,$_POST['email']);
      $password = mysqli_real_escape_string($con,$_POST['password']); 
      
      $sql = "SELECT email FROM login WHERE email= '$email' and password = '$password';";
      $result = mysqli_query($con,$sql);
      //$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
     // $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
            $_SESSION['login_user'] = $email;
            echo '<script> alert("Successfully logged in");</script>';
            //echo "<center><h3 style='color:green';>Successfully logged in</h3></center>";
          
      }else {
        
         echo '<script> alert("Your Login Name or Password is invalid");</script>';
         //echo "<center><h3 style='color:red';>Your Login Name or Password is invalid</h3></center>";
          
      }
   }
    
	?>
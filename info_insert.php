<?php
     $conn = mysqli_connect('localhost','root','');
     if(!$conn)
     {
          echo "Not connected to Server";
     }

     if(!mysqli_select_db($conn,'yesplus'))
     {
          echo "Database not selected";
     }
     
     $UserName = $_POST['email'];
     $Password = $_POST['password'];



     $sql = "INSERT INTO login (email,password) VALUES ('$UserName', '$Password')";
     
     if(!mysqli_query($conn,$sql))
     {
         //echo "Record not Inserted";
         echo '<script> alert("Record not inserted");</script>';
     }
      else
      {
          echo '<script> alert("Successfully record inserted");</script>';
         //echo "<h3 style='color:green;'><center>Record Inserted</center></h3>";
      }
      

?>

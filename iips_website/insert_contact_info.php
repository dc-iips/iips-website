<?php 
      $conn = mysqli_connect('localhost','root','','pbas_db');

      if($conn)  {
                  $name = isset($_POST['name']) ? $_POST['name'] : '';
                  $email = isset($_POST['email']) ? $_POST['email'] : '';
                  $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
                  $message = isset($_POST['message']) ? $_POST['message'] : '';
                 $var = "INSERT INTO `contact_us` (name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";         
               
                 if(mysqli_query($conn ,$var)){
                     
                      echo "Record Submitted";
                  }else{
                      echo "<script>alert('Record not Submitted') </script>";
                 }            
        } 
        else  {
             echo "not conncted";
        } 
?>  
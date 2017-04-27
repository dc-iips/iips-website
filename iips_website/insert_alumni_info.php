<?php 
        $conn = mysqli_connect('localhost','root','','pbas_db');

      if($conn)  {
                  $name = isset($_POST['name']) ? $_POST['name'] : '';
                  $email = isset($_POST['email']) ? $_POST['email'] : '';
                  $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
                  $current = isset($_POST['current']) ? $_POST['current'] : '';
                  $company = isset($_POST['company']) ? $_POST['company'] : '';

                  alert("BEFORE VAR");
                  $var = "INSERT INTO `register` (name, email, phone, current, company_name) VALUES ('$name', '$email', '$phone', $current, $company)";         
               
                 if(mysqli_query($conn ,$var)){
                      // exit();
                      echo "Record Submitted";
                  }else{
                      echo "<script>alert('Record not Submitted') </script>";
                 }            
        } 
        else  {
             echo "not conncted";
        } 
?>
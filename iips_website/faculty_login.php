<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" 
    "http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <title>Home | International Institute of Professional Studies, Devi Ahilya Vishwavidhalay</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/newfile.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="yamm/yamm.css" rel="stylesheet">
    <link href="css/footer.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
  </head>
<body>
    <?php include 'header.php';?>
    <form method="post" action="validate_login.php" >
        <table border="1" >
            <tr>
                <td><label for="users_email">Email</label></td>
                <td><input type="text" 
                  name="users_email" id="users_email"></td>
            </tr>
            <tr>
                <td><label for="users_pass">Password</label></td>
                <td><input name="users_pass" 
                  type="password" id="users_pass"></input></td>
            </tr>
            <tr>
                <td><input type="submit" value="Submit"/>
                <td><input type="reset" value="Reset"/>
            </tr>
        </table>
    </form>
    <?php include 'footer.php';?>
</body>
</html>
<?php
    // start the session
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>

<link rel="stylesheet" href="css.css">
<body>

    <center>
    <a href="index.php" class="back">🔙</a>
<h1 class="title">Sign-In</h1>
<div id="form">
<form action="index.php" method="post">
    <center>
<table border="0" cellspacing="30px">
<tr>      
        <th><span for="username">UserName :</span></th>
        <td><input type="text" name="username" id="username" placeholder="Enter Your UserName" required ></td>
</tr>
<tr>
        <th><span for="password">Password :</span></th>
       <td><input type="password" name="password" id="password" placeholder="Enter Your Password" required>
       <i class="icon" onclick="pass_show()">👁️‍🗨️</i></td>
</tr>
<tr>
        <th><button type="submit" name="btnsignin">Submit</button></th>
        <th><button type="reset" id="reset">Reset Form</button></th>
</tr>
<tr>
        <th colspan="2"><a href="security/signup.php">New User? Register YourSelf.</a></th>
</tr>
</center>
</form>
</div>
<?php
if(isset($_POST["btnsignin"]) == true)
{

    $username = $_POST["username"];
    $password = $_POST["password"];



      $con = mysqli_connect(
                "localhost",
                "root",
                "",
                "signupin",
                "3306"
            );
        
        if (mysqli_connect_errno() == true)
        {
            die("<h2> Error in Connectivity!</h2>");
        }

        $data = "SELECT * FROM userinfo WHERE password='$password' AND username='$username';";

        $resultset = mysqli_query($con , $data);

        $rows = mysqli_num_rows($resultset);
        mysqli_close($con);

        if($rows == 0)
        {
            echo("<tr><th colspan='2'><h3 style='color: red;'>Invaild Username Or password!</h3></th></tr>");
        }
        else
        {
            $_SESSION["se_username"] = $username;
            header("Location:home.php");
            exit();
        }

        
    }
?>
</table>
</center>
<script src="javascript.js"></script>
</body>
</html>
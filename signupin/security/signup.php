<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign</title>
</head>
<link rel="stylesheet" href="css.css">
<body>
    <center>
        <a href="index.php" class="back">🔙</a>
        <h1 class="title">Sign-Up</h1>
<div id="form">
        <form action="signup.php" method="post">
            <table border="0" cellspacing="10px">
                <tr>
                    <th><span for="username">UserName :</span></th>
                    <td><input type="text" name="username" id="username" placeholder="Enter Your UserName" required>
                    </td>
                </tr>

                <tr>
                    <th><span for="name">Full Name :</span></th>
                    <td><input type="text" name="uname" id="uname" placeholder="Enter Your Name" required></td>
                </tr>

                <tr>
                    <th><span for="mail">Mail ID :</span></th>
                    <td><input type="email" name="mail" id="mail" placeholder="Enter Your Mail Id" required></td>
                </tr>
                <tr>
                    <th><span for="phone">Phone Number :</span></th>
                    <td><input type="tel" name="phone" id="phone" placeholder="Enter Your Phone Number" required></td>
                </tr>
                <tr>

                <tr>
                    <th><span for="password">Password :</span></th>
                    <td><input type="password" name="password" id="password" placeholder="Enter Your Password"
                            required><i class="icon" onclick="pass_show()">🔑</i></td>
                </tr>
                <tr>
                    <th><span for="cpassword">Confirm Password :</span></th>
                    <td><input type="password" name="cpassword" id="cpassword" placeholder="Re-enter-Password"
                            required><i class="icon-c" onclick="pass_show_c()">🔑</i></td>
                </tr>

                <th><span for="dob">Date Of Birth :</span></th>
                <th><input type="date" name="dob" id="dob" required></th>
                </tr>
                <tr>
                    <th colspan="3"><span>Gender :</span>&nbsp;&nbsp;
                        <input type="radio" name="gender" id="gender" value="male" required>Male&nbsp;&nbsp;
                        <input type="radio" name="gender" id="gender" value="female" required>Female&nbsp;&nbsp;
                        <input type="radio" name="gender" id="gender" value="other" required>Other
                    </th>
                </tr>
                <tr>
                    <th colspan="2"><button type="submit" name="btnsignup" >Submit</button></th>
                </tr>

                <tr>
                    <th colspan="2"><button type="reset" id="reset">Reset Form</button></th>
                </tr>
                <tr>
                    <th colspan="2"><a href="signin.php">Already User? Login Here.</a></th>
                    </th>
        </form>
</div>

        <?php
if(isset($_POST["btnsignup"]) == true)
{

    $username = $_POST["username"];
    $uname = $_POST["uname"];
    $mail = $_POST["mail"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $dob = $_POST["dob"];
    $gender = $_POST["gender"];


if($password == $cpassword)
    {
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

        $data = "INSERT INTO userinfo values('$username','$uname','$mail','$phone','$password','$dob','$gender');";


        if (mysqli_query($con,$data) == false)
        {
            die("<h3 <h3 style='color: red;' >Error In Query Please Recheck The Query $data </h3>");
        }

        mysqli_close($con);

        echo("<h3 style='color: green;'> Sign Up Successfull! You Can Continue With Login Page.</h3>");
        

    }
else{
    echo( "<h3 style='color: red;'>Please Enter Password And Confirm Password Same.</h3>");
}
}
?>
        </table>
    </center>
    <script src="javascript.js"></script>
</body>

</html>
<?php 
$servername="localhost";
$username="root";
$password="7506220178";
$db="mydb";

//create connection
$conn=new mysqli($servername,$username,$password,$db);

if($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}
$user=$email=$mob=$pswd=$dob="";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $user=test_input($_POST["user"]);
    $email=test_input($_POST["email"]);
    $mob=test_input($_POST["mobile"]);
    $pswd=test_input($_POST["pswd"]);
    $dob=htmlspecialchars($_POST["dob"]);
}
function test_input($data)
{
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}


$sql="INSERT INTO user Values ('$user','$pswd','$email','$dob','$mob')";
$conn->query($sql);
$conn->close();
?>
<html>
    <head>
        <title>BookUrShow</title>
        <style>
            .a{
                color:green;
                text-size:1000px;

            }
        </style>

    </head>
    <Body>
        <p class="a">Sigining In...</p>
        <?php
          header("location:http://localhost/mainpage.php?user=".$user);
          ?>
    </body>    
</html>


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
$user=$pswd="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $user=$_POST["user"];
    $pswd=$_POST["pswd"];
}
$sql="SELECT username,pd from user where username='$user' and pd='$pswd'";
$result = $conn->query($sql);


if($result->num_rows() > 0)
{
    while($row = $result->fetch_assoc())
    {
        if($row["username"]===$user && $row["password"]===$pswd)
        {
        }
        else if($row["username"] !== $user){
            echo "This username Dosent Exist";
        }
        else if($row["pd"]!==$pswd)
        {
            echo "You Entered An Incorrect Password";
        }
    }
}
conn->close();
 ?>
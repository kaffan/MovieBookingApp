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

?>
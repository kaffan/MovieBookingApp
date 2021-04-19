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
$q_one=$_REQUEST["q2"];
if($q_one=="")
{
    echo "Password Is Required";

}
$sql="SELECT pd from user";
$result=$conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        if($q_one==$row["pd"])
        {
            echo "This Password Is Already Used By Another Username. Please try another";
            break;
        }
    }
} 
else {
    echo "";
}
$conn->close();
?>

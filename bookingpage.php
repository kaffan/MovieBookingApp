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
!DOCTYPE html>
<html>
    <head>
        <title>
            BookUrShow
        </title>
        <style>
            header
            {
               width:100%;
               height:70px;
               background-color : rgb(38, 3, 85);
            }
            .title
            {
                float:left;
                margin-top:20px;
                margin-left:50px;
                color:white;
                font-size:25px;
            }
            .sear
            {
                float:left;
                margin-top:20px;
                height:30px;
                margin-left:30px;
                width:40%;
            }
            .dropdown
            {
                float:left;
                margin-top:20px;
                margin-left:30%;
                display: block;
                color:white;
                font-size:25px;
                
                margin-bottom: 30px;
            }
            .dropbtn
            {
                background-color: #4CAF50;
                color: white;
                font-size: 16px;
                border: none;
                width:100px;
                height:30px;
            }
            .dropdown-content
            {
                position:absolute;
                display: none;
                background-color: #f1f1f1;
                min-width: 160px;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index: 1;
            }
            .dropdown-content a
            {
                background-color: white;
                display: block;
                padding:12px 16px;
                color:black;
                font-size: 15px;
            }
            .dropbtn:hover{background-color:blue; }
            .dropdown:hover .dropdown-content{display:block;}
            .dropdown-content a:hover{background-color:thistle;}
             
         
            ul {
                margin-top:10px;
  list-style-type: none;
  padding: 0;
  overflow: hidden;
  background-color: rgb(34, 14, 61);
  width:100%;
  height:40px;
  text-align:center;
}

li {
  float: left;
  text-align:center;
}

li a, .dropbtn1 {
  display: block;
  color: white;
  text-align: center;
  text-decoration: none;
  width:100px;
  padding-top:16px;
  padding-bottom:16px;
  background-color:rgb(34, 14, 61);
  border:0;
}

li a:hover, .dropdown1:hover .dropbtn1 {
  background-color: black;
}

li,.dropdown1 {
  display: block;
}

.dropdown-content1 {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 280px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  overflow:hidden;
}

.dropdown-content1 a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
  font-size:15px;
  background-color: #f9f9f9;
  border:1px; 
}

.dropdown-content1 a:hover {background-color: #ffffff;
}

.dropdown1:hover .dropdown-content1 {
  display: block;
}
        </style>
</head>
        
    <body style="background-color:#e6ffff;">
    <header>
            <span class="title">BookUrShow</span>
            <input type="text" placeholder=" Search for movies" name="bar1" class="sear">  
            <div class="dropdown">
                <button class="dropbtn">Account</button>
                   <div class="dropdown-content">
                       <a>Your Booked Tickets</a>
                       <a>Settings</a>
                   </div>
            </div>
        </header>    
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">News</a></li>
            <li class="dropdown1">
              <button class="dropbtn1">Contact</button>
                <div class="dropdown-content1">
                    <a>7304357388</a>
                    <a>E-Mail:kaffan022@gmail.com</a>
                </div>
             </li>     
            <li><a href="#">About</a></li>
        </ul>   


    </body>
 </html>   
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
$sql="SELECT * FROM moviesn";
$result=$conn->query($sql);

?>
<!DOCTYPE html>
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

* {box-sizing:border-box}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}   </style>
    </head>
    <body background="pink">
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
        <!-- Slideshow container -->
<div class="slideshow-container">

        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
          <div class="numbertext">1 / 3</div>
          <img src="img1.jpg" style="width:100%">
          <div class="text">Caption Text</div>
        </div>
      
        <div class="mySlides fade">
          <div class="numbertext">2 / 3</div>
          <img src="img2.jpg" style="width:100%">
          <div class="text">Caption Two</div>
        </div>
      
        <div class="mySlides fade">
          <div class="numbertext">3 / 3</div>
          <img src="img3.jpg" style="width:100%">
          <div class="text">Caption Three</div>
        </div>
        <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="img4.jpg" style="width:100%">
                <div class="text">Caption Three</div>
              </div>
              <div class="mySlides fade">
                    <div class="numbertext">3 / 3</div>
                    <img src="img5.jpg" style="width:100%">
                    <div class="text">Caption Three</div>
                  </div>
      
        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
      </div>
      <br>
      
      <!-- The dots/circles -->
      <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
      </div>  
      <h2><B><u>Movies</u></B></h2>
      <div>
         </*?php
          while($rows=$result->fetch_assoc())
          {
            if($rows["genre"]=="Romantic")
            {
         ?*/> 
          <h2>Romantic</h2>
          <?php
          while($rows=$result->fetch_assoc())
          {
            if($rows["genre"]=="Romantic")
            {
              ?>
          <div>
              <div><img src="<?php if($rows["genre"]=="Romantic"){echo $rows["imgm"];}?>" style="width:100%; height:50px;">
              </div>
              <label>Name : <?php if($rows["genre"]=="Romantic")
                {
                    echo $rows["moviename"];
                }
                 ?>  </label><br>
              <label>Grade :
                    <?php if($rows["genre"]=="Romantic")
                    {
                        echo $rows["grade"];
                    }
                     ?>
              </label><br>
              <label>ImDB :
                    <?php if($rows["genre"]=="Romantic")
                    {
                        echo $rows["imdb"];
                    }
                  }
                } ?>
              </label><br>
          </div>
          </*?php
          $result=$conn->query($sql);
          while($rows1=$result->fetch_assoc())
          {
            if($rows1["genre"]=="Action")
            {
          ?*/>
          <h2>Action/Thriller</h2>
          <?php
          $result=$conn->query($sql);
          while($rows1=$result->fetch_assoc())
          {
            if($rows1["genre"]=="Action")
            {
          ?>
          <div class="slideshow-container">
               <div class="mySlides fade" style="width:=200px; height:400px;">
                <div style="float:left;"><img src="<?php echo $rows1["imgm"]?>" style="width:100%; height:50px;">
                </div>
                <label>Name : <?php if($rows1["genre"]=="Action"){ 
                      echo $rows1["moviename"];
                }
                   ?>  </label><br>
                <label>Grade :
                      <?php if($rows1["genre"]=="Action"){
                          echo $rows1["grade"];
                      }
                       ?>
                </label><br>
                <label>ImDB :
                      <?php if($rows1["genre"]=="Action"){
                          echo $rows1["imdb"];
                      }
                      }
                    }
                  ?>
                </label><br>
            </div>
                  </div>
            </*?php
            $result=$conn->query($sql);
             while($rows2=$result->fetch_assoc())
             {
            if($rows2["genre"]=="comedy")
            {
          */?>
          <h2>Comedy</h2>
          <?php
            $result=$conn->query($sql);
             while($rows2=$result->fetch_assoc())
             {
            if($rows2["genre"]=="comedy")
            {
          ?>
          <div>
                <div><img src="<?php echo $rows2["imgm"]; ?>" style="width:100%; height:50px;">
                </div>
                <label>Name : <?php if($rows2["genre"]=="comedy"){
                      echo $rows2["moviename"];
                }
                   ?>  </label><br>
                <label>Grade :
                      <?php if($rows2["genre"]=="comedy"){
                          echo $rows2["grade"];
                      }
                       ?>
                </label><br>
                <label>ImDB :
                      <?php if($rows2["genre"]=="comedy")
                      {
                          echo $rows2["imdb"];
                     }
                    }
                    }
                      ?>
                </label><br>
            </div>
            </*?php
            $result=$conn->query($sql);
             while($rows3=$result->fetch_assoc())
             {
            if($rows3["genre"]=="Family")
            {
          */?>
          <h2>Family</h2>
          <?php
            $result=$conn->query($sql);
             while($rows3=$result->fetch_assoc())
             {
            if($rows3["genre"]=="Family")
            {
          ?>
          <div>
                <div><img src=""<?php echo $rows3["imgm"] ?>" style="width:100%; height:50px;">
                </div>
                <label>Name : <?php if($rows3["genre"]=="Family"){
                      echo $rows3["moviename"];
                }
                   ?>  </label><br>
                <label>Grade :
                      <?php if($rows3["genre"]=="Family"){
                          echo $rows3["grade"];
                      }
                       ?>
                </label><br>
                <label>ImDB :
                      <?php if($rows3["genre"]=="Family"){
                          echo $rows3["imdb"];
                      }
                     }
                     } ?>
                </label><br>
                <?php 
                $conn->close();?>
            </div>
          

      </div>
    </body>
    <script>
            var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
         </script>
</html>
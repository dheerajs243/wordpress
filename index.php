

<?php

include('connection.php');
error_reporting(0);
?>





<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Orelega+One&display=swap" rel="stylesheet">

    <title>Maan Fitness Club</title>
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Maan Fitness Club</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="Index.php">Home</a>
              </li>
             
              <li class="nav-item">
                <a class="nav-link " href="feedback.php" tabindex="-1" aria-disabled="true">Watch Feedback</a>
              </li>
            
              <li class="nav-item">
                <a class="nav-link " href="about.php" tabindex="-1" aria-disabled="true">About</a>
              </li>
            
              <li class="nav-item">
                <a class="nav-link " href="contactus.php" tabindex="-1" aria-disabled="true">Contact Us</a>
              </li>
            </ul>
            <form class="d-flex">

                    <a class="color-a" id="app" href="contactus.php"> <button class="btn btn-app btn-outline-success" type="submit">Make an
                            Appointement</a></button>
                </form>
                       </form>
          </div>
        </div>
      </nav>


      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/pic1.jpg" height="600px" width="100%" alt="this is image">
          </div>
          <div class="carousel-item">
            <img src="images/pic5.jpg" height="600px" width="100%" alt="...">
          </div>
          <div class="carousel-item">
            <img src="images/pic7.jpg" height="600px" width="100%" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>


      <div class="container  div-main " >
        <div class="row featurette">
          <div class="col-md-7 main-cont">
            <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
            <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
          </div>  
          <div class="col-md-5">
     <img src="images/pic4.jpg" class="img" width="450px" height="400px" alt="">
    
          </div>
        
        </div>
      </div>

<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
  $first=$_POST['f_name'];
  $last=$_POST['l_name'];
  $mobile=$_POST['phone'];
  $emailid=$_POST['emailid'];
  $state=$_POST['state'];
  $messg=$_POST['msg'];
  
  
  $conn=mysqli_connect($servername,$username,$password,$dbname);
  
  if(!$conn){
      die ("We are facing some technical issue and we are sorry for this:".mysqli_connect_error($conn));
  }
         else{
                     $sql="INSERT INTO `maan_club` (`First Name`, `Last Name`, `Phone No.`, `Email`, `State`, `Message`) 
                      VALUES ('$first', '$last', '$mobile', '$emailid', '$state', '$messg')";
  
           $result=mysqli_query($conn,$sql);
  
  
           if($result){
            echo "Your data has been sumitted Successfully . We will get in touch with you Sortly
            ";
            }
       else{
      echo 'We are facing some type of technical issue that ';
       }
  }
  
   
  }
  
  
?>
      <h1 class="contact-us">Contact Us</h1> 
      <div class="container form-border">
        <form action="index.php" method="post">

            <label for="fname">First Name</label>
            <input type="text" id="fname" name="f_name" placeholder="Your name..">

            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="l_name" placeholder="Your last name..">

            <label for="lname">Phone</label>
            <input type="number" id="phone" name="phone" placeholder="Your Phone No.">

            <label for="lname">Email</label>
            <input type="email" id="emailid" name="emailid" placeholder="Enter your email Id..">



         
            <label for="State">State</label>
            <select id="State" name="state">
                <option value="Select">---Select----</option>
                <option value="australia">Andhra Pradesh</option>
                <option value="canada">Arunachal Pradesh</option>
                <option value="Assam">Assam</option>
                <option value="Bihar">Bihar</option>
                <option value="Chhatishgarh">Chhatishgarh</option>
                <option value="Goa">Goa</option>
                <option value="Gujrat">Gujrat</option>
                <option value="Haryana">Haryana</option>
                <option value="Himachal Pradesh">Himachal Pradesh</option>
                <option value="Jharkhand">Jharkhand</option>
                <option value="Karnataka">Karnataka</option>
                <option value="Kerala">Kerala</option>
                <option value="Madhaya Pradesh">Madhaya Pradesh</option>
                <option value="Maharashtra">Maharashtra</option>

                <option value="Meghalya">Meghalya</option>
                <option value="Mizoram">Mizoram</option>
                <option value="Nagaland">Nagaland</option>
                <option value="Odisha">Odisha</option>
                <option value="Punjab">Punjab</option>
                <option value="Rajasthan">Rajasthan</option>
                <option value="Sikkim">Sikkim</option>
                <option value="Tamil Nadu">Tamil Nadu</option>
                <option value="Telangana">Telangana</option>
                <option value="Tripura">Tripura</option>
                <option value="Uttarakhand">Uttarakhand</option>
                <option value="Uttar Pradesh">Uttar Pradesh</option>
                <option value="West Bengal">West Bengal</option>
            </select>

            <label for="subject">Message</label>
            <textarea id="subject" name="msg" placeholder="Tell Me Your Query.." style="height:200px"></textarea>

            <input type="submit" value="Submit">

        </form>

    </div>
    <footer class=" footcolor footbody footbody-resp">
        <p class="float-end"><a href="#">Back to top</a></p>
        <p class="do-para">© 2021 Maan fitness Club. All right Reserved · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
      </footer>  
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
   
  </body>
</html>
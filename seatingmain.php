<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exam hall seating arrangement</title>
    <link
    href="https://fonts.googleapis.com/css2?family=Lobster&family=Montserrat:wght@100&family=Rubik+Beastly&family=Ubuntu:wght@300&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="css/seatingmain.css">
</head>
<style>
    body{
    margin: 0;
    padding: 0;
    
}

     #zoom-In:hover  {
     transform: scale(1.2);
     cursor: pointer;
 }
 .image {
     display: block;
     width: 100%;
     height: 100%;
     cursor: pointer;
 }    
#zoom-In {
    transform: scale(1);
    transition: 0.3s ease-in-out;
}
  
  .container-fluid2{
    margin-left: 180px;
    margin-right: 180px;
  }
  .last{
    color: black:
    
  }
  .mail{
    background-color: black;
  }
  .btn1{
        border: 2px solid black;
        border-radius: 5px;
        width: 100px;
        height: 35px;
        padding-top: 0px;
        padding-bottom: 0px;
        background-color: blueviolet;
        color: azure;
        margin-top: 20px;
        margin-bottom: 20px;
    }
    .btn1:hover{
        background-color: antiquewhite;
        color: black;
        cursor: pointer;
    }
   
    .form1{
        margin-top: 100px;
        margin-left: 50px;
        margin-right: 50px;
        background-color: lightgrey;
    }
    .form1 input{
    display: block;
    text-align: center;
    width: 50%;
    border: 2px solid black;
    border-radius: 8px;
    margin: 7px;
    padding: 6px;
    font-size: 16px;
   
}
.form1 h1{
  
   color: white;
}
</style>
<body>
<section id="title">

<!-- Nav Bar -->


  <nav class="navbar  navbar-expand-lg navbar-dark">
      <a class="navbar-brand" href="project2/index.html">About Sage </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="https://sageuniversity.edu.in/">SAGE BHOPAL</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://sageuniversity.in/">SAGE INDORE</a>
</li>   
 
    </ul>
  </div>
</nav>


<!-- Title -->

<div class="row">
  <div class="col-lg-3">
      <br><br><br><br><br><br>
      <div class="student-photo">
      <div id="zoom-In" class="image">
   <a href="sagestudentdata.php"> <img src="images/student1234-final.png" alt=""> </a>  </div>
</div>
 
  
</div>
  <div class="col-lg-3">
      <br><br><br><br><br>
      <div class="room-photo">
  <div id="zoom-In" class="image">
  <a href="sageroomdata.html"> <img src="images/studentdata123-final.png" alt=""> </a>  </div>
</div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class="room-photo">
  <div id="zoom-In" class="image">
  <a href="studentpasswordgenerate.php"> <img src="images/PASSWORD-depositphotos-bgremover.png" alt=""> </a>  </div>
</div>s
</div>
  
  <div class="col-lg-3">
  <a href="finalalgo.php">  <img class="title-img" src="images/finalsetting011.png" alt="sage"></a>
  </div>
  <div class="col-lg-3">
  <br><br><br><br><br><br>
  <div class="invigilator-photo">
  <div id="zoom-In" class="image">
  <a href="invigilatordata.php"> <img src="images/invigilator/invigilator-logo-final.png" alt=""> </a>  </div>
</div>
</div>
</div>
</section>

</body>
</html>

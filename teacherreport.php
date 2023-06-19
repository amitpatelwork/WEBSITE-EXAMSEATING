<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEACHER PAGE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>
<style>
    .pic1{
        width:80%;
        margin-top: 80px;
    }
    .roomno{
        margin-top: 330px;
    }
    #testimonials{

background-color:;
color: #fff;
}
.testimonials-img{
width: 80%;
height: %;

margin: 20px;
}
h1{
    color: #6D8B74;
    text-align: center;
  }
   .amit1 {
    color: #6D8B74;
    text-align: center;
    margin-right: 20%;
    margin-left: 18%;
    
  }   .amit1{
    margin-top: 4%;
        margin-right: 21%;
     margin-left: 20%;
     text-align: center;
    color: white;
    background-color: black;
      }
.amit3{
  height: 720px;
  background-color: lightpink;
}
</style>
<body>
    <section class="page1">
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
       
    <center><div class="pic1">
            
      <img src="images/roomfinal30seat.png" class="d-block w-100" alt="...">
     </div>
    </center>
      <div class="carousel-caption d-none d-md-block">
          <div class="roomno">
        <h4><b>ROOM NO 208</b></h4>
        </div>
      </div>
      </div>
      <div class="carousel-item" data-bs-interval="2000">
      <center><div class="pic1">
      <img src="images/roomfinal30seat.png" class="d-block w-100" alt="...">
      </div>
    </center>
      <div class="carousel-caption d-none d-md-block">
        <h4><b>ROOM NO 209</b></h4>
        </div>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="200">
    <center><div class="pic1">
      <img src="images/roomfinal30seat.png" class="d-block w-100" alt="...">
      </div>
    </center>
      <div class="carousel-caption d-none d-md-block">
        <h4>ROOM NO 210</h5>
        </div>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </section>
    <section class="amit3">
<br><br>  <br><br>
<h1><B> Invigilator for examination</B></h1>
<br>
<section class="amit1">
<?php

$con=new mysqli("localhost","root","","pbl2project");
$sql="select * from invigilator_data";
$result = $con->query($sql);
 if ($result) {
   // output data of each row
 echo "<table border='5' width='900px'><tr><th>S.No</th><th>Name</th><th>Department</th></tr>";
   while($row = $result->fetch_assoc()) {
 echo "<tr><td>".$row['S_no']."</td><td>".$row['Name']."</td><td>".$row['Department']."</td><tr>";
 
   }
 }
 ?>
</section>
</body>
</html>
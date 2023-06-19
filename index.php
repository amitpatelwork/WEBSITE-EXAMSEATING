<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exam hall seating arrangement</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


  <link rel="stylesheet" href="css/index.css">
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


h1{
    font-family: "Montserrat-Black";
    font-weight: bold;
     font-size: 3.3em;
     
      
}
h2{
    font-family: "Montserrat-Black";
    color: rgb(102, 112, 37);
    font-size: 2.8em;
    text-align: center;
}
h3{
    font-family: "Montserrat-Black";
    color: rgb(38, 35, 32);
    text-align: center;

}
h4{
    font-family: "Montserrat-Black";
    color: rgb(28, 28, 23);
    font-size: 2.4em;
    font-weight: bold;
}
.STUDENT-photo{
  
  margin-top: 250px;
}

    .STUDENT-photo img{
        width: 10%;
        height: 30%;
    }
    .room-photo{
        margin-left: 39px;
        margin-top: 50px;
    
    }
    .room-photo img{
        width: 60%;
        height: auto;
    }
    .btn{
        border: 2px solid yellow;
        border-radius: 5px;
        width: 100px;
        height: 30px;
        background-color: blueviolet;
        color: azure;
        margin-top: 10px;
        margin-bottom: 20px;
        padding-bottom: 10px;
        padding-top: 0px;
        text-align: center;
    }
    .btn:hover{
        background-color: antiquewhite;
        color: black;
        cursor: pointer;
    }
   
    .form1{
       width: 400px;
        background-color: black;
      
    }
    .form1 input{
    display: block;
    text-align: center;
    width: 50%;
    border: 2px solid black;
    border-radius: 8px;
    
    padding: 4px;
    font-size: 13px;
   
}
.form1 h3{
  font-weight: bold;
  font-size: 2.3rem;
margin-left: 20px;
   color: white;
}
  
















*{
    margin:0;
    padding:0;
}

.loader{
        position:relative;
        width:300px;
        height:300px;
        transform-style:preserve-3d ;
        transform:perspective(500px) rotateX(60deg);
        margin-top: 200px;
       
}
.loader span
{
       position:absolute;
       display:block;
       border:5px solid rgb(165, 34, 34);
       box-shadow:0 5px 0 rgb(9, 6, 6),
                inset 0 5px 0 rgb(172, 177, 65);
       box-sizing:border-box;
       border-radius:50%;
       animation:ani 3s ease-in-out infinite;
}
@keyframes ani{
            0%,100%
            {
             transform:translateZ(-100px);
            }
            50%
            {
             transform:translateZ(100px);
            }
}
.loader span:nth-child(1) 
{
   top:0;
   left:0;
   bottom:0;
   right:0;
   animation-delay:1.4s;
}
.loader span:nth-child(2) 
{
   top:10px;
   left:10px;
   bottom:10px;
   right:10px;
   animation-delay:1.3s;
}
.loader span:nth-child(3) 
{
   top:20px;
   left:20px;
   bottom:20px;
   right:20px;
   animation-delay:1.2s;
}
.loader span:nth-child(4) 
{
   top:30px;
   left:30px;
   bottom:30px;
   right:30px;
   animation-delay:1.1s;
}
.loader span:nth-child(5) 
{
   top:40px;
   left:40px;
   bottom:40px;
   right:40px;
   animation-delay:1s;
}
.loader span:nth-child(6) 
{
   top:50px;
   left:50px;
   bottom:50px;
   right:50px;
   animation-delay:0.9s;
}
.loader span:nth-child(7) 
{
   top:60px;
   left:60px;
   bottom:60px;
   right:60px;
   animation-delay:0.8s;
}
.loader span:nth-child(8) 
{
   top:70px;
   left:70px;
   bottom:70px;
   right:70px;
   animation-delay:0.7s;
}
.loader span:nth-child(9) 
{
   top:80px;
   left:80px;
   bottom:80px;
   right:80px;
   animation-delay:0.6s;
}
.loader span:nth-child(10) 
{
   top:90px;
   left:90px;
   bottom:90px;
   right:90px;
   animation-delay:0.5s;
}
.loader span:nth-child(11) 
{
   top:100px;
   left:100px;
   bottom:100px;
   right:100px;
   animation-delay:0.4s;
}
.loader span:nth-child(12) 
{
   top:110px;
   left:110px;
   bottom:110px;
   right:110px;
   animation-delay:0.3s;
}
.loader span:nth-child(13) 
{
   top:120px;
   left:120px;
   bottom:120px;
   right:120px;
   animation-delay:0.2s;
}
.loader span:nth-child(14) 
{
   top:130px;
   left:130px;
   bottom:130px;
   right:130px;
   animation-delay:0.1s;
}
.loader span:nth-child(15) 
{
   top:140px;
   left:140px;
   bottom:140px;
   right:140px;
   animation-delay:0s;
}






</style>
<body>
<section id="title">

<!-- Nav Bar -->
<div class="container-fluid">

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
</div>
<div class="row">
<div class="col-lg-6">
   <br><br><br>
<h2> Welcome to My <b> TECHWITHAMIT_ </b>Instagram Page</h2>
      <br>
      <h3> This Page is Provide You Frontend Animations and useful Codes  </h3>
      <di class="room-photo">
 
   
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
    <a href="login.php">   <img src="images/adminlogo-final.png" class="d-block w-100" alt="..."></a>
    </div>
    
    <div class="carousel-item">
<a href="teacherloginpage.php">  <img src="images/zteacherlogo.png" class="d-block w-100" alt="..."></a>
    </div>
    <div class="carousel-item">
<a href="studentlogin.php">  <img src="images/I/STUDENTLOGINLOGOFINAL.png" class="d-block w-100" alt="..."></a>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

</div>
<div class="col-lg-6">


<center>
<div class="loader" >
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
</div>
</center>

</div>
</div>

</section>
</body>
</html>


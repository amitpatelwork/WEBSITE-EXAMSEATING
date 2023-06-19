<?php
session_start();
?>
<html>
  <head>
    <title>TODO supply a title</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="assets/favicon.ico" rel="shortcut icon" />
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
 <link rel="stylesheet" href="style.css">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
  </head>
  <style>
    *{
    padding: 0px;
    margin: 0%;
}
html{
    margin-left: 75px;
}
body{

    position: relative;
}
.menu{
    position:fixed;
    left: 0;
    right: 0;
    width: 75px;
    height: 100vh;
    background: #555;
    font-family: sans-serif;
    font-size: 16px;
}
.menue__item{
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 15px 0;
    text-decoration: none;
    color: white;
    transition:background 0.3s;
}
.menue__item > span{
    font-size: 2.2em;
    
}
.menue__item:hover{
    background: #dddddd; 
}
.menue__item::after{
    position: absolute;
    display: inline-block;
    top: 50%;
    transform: translateY(-50%);
    left: 100%;
    content: attr(data-tooltip);
    margin: 15px;
    white-space: nowrap;
    padding: 7px 12px;
    font-size: 0.9em;
    font-weight: bold;
    background: rgba(0,0,0,8);
    border-radius: 15px;
    color: #ffffff;
    opacity: 0;
    visibility: hidden;
   transition: opacity 0.3s;
}
.menue__item:hover::after{
    opacity: 1;
    visibility: visible;
}
#active1 {
  background-color: #b91c1c; /* Add an active/current color */
}
.logo{
    display:flex;
    align-items: center;
/*  margin-left:0px;
  margin-bottom:2px;

  position: relative;
   width:18%;
   */
   text-align:right;
  

   background-color: #b91c1c;
  height:66px;
}
.as{
    display: flex;
    margin-right: 0;
}
.logo img{
    width:120px;
}
.nav{
background-image:linear-gradient(#0001,#b91c1c);
}

.myContainer{
    display:flex;
    justify-content: center;
    align-items: center;
    margin-left: 50px;
    width:20rem;
    border-radius: 50px;
    height:13rem;
    background-image:linear-gradient(rgb(156, 45, 45),rgb(225, 98, 119),rgb(220, 120, 74))  ;
}

.myContainer .text{
    font-size:1.3rem;
    font-weight:bolder;
    color:white;
}

.myContainer .div-button{
    margin-top:20px;
    text-align:center;
}

.all-card{
    
    display:flex;
    gap:5px;
    margin-bottom:10px;
}

.first-2{
    margin-top:10px;
    display:flex;
    gap:5px;
}
.material-icons{
    font-size: 80px;
}
.material-icons2 img{
    width: 80%;
}
.material-icons3 img{
    width: 65%;
}
.material-icons4 img{
    width: 65%;
}
.material-icons5 img{
    width: 75%;
}
.allbody{
    background-color: #b4afa7;
}
#zoom-In {
    transform: scale(1);
    transition: 0.3s ease-in-out;
}
#zoom-In:hover  {
     transform: scale(1.2);
     cursor: pointer;
 }














 *{
    margin:0;
    padding:0;
}

.loader{
        position:absolute;
        width:400px;
        height:400px;
        transform-style:preserve-3d;
        transform:perspective(500px) rotateX(60deg);
        margin-left: 1100px;
}
.loader span
{
       position:absolute;
       display:block;
       border:5px solid rgb(156, 45, 45);
       box-shadow:0 5px 0 rgb(225, 98, 119),
                inset 0 5px 0 rgb(220, 120, 74);
       box-sizing:border-box;
       border-radius:50%;
       animation:ani 3s ease-in-out infinite;
}
@keyframes ani{
            0%,100%
            {
             transform:rotateY(360deg);
            }
            50%
            {
             transform:rotateY(180deg);
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
   animation-delay:.5s;
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
 

    <nav class="menu">
      <a href="#" class="menue__item" id="active1" data-tooltip="dashboard">
        <span class="material-icons">home</span>
      </a>
      <a href="#" class="menue__item" data-tooltip="settings">
        <span class="material-icons">settings</span>
      </a>
      <a href="#" class="menue__item" data-tooltip="logout">
        <span class="material-icons">logout</span>
      </a>
    </nav>

    <div class="logo">
      <img
        title="SAGE University Bhopal"
        src="https://sageuniversity.edu.in/assets/images/logo/logo_new.png"
        alt="Sage University Bhopal"
      />
      <!-- 
      <div class="as"><span>aside</span></div>-->
    </div>
<section class="allbody">
    <div class="all-card">
      <div class="first-2">
        <div class="myContainer">
          <div class="text">
 
            <div class="div-button">
                <div class="material-icons2">
                    <div id="zoom-In">
                <a href="sagestudentdata.php"> <img src="images/student1234-final.png" alt=""  > </a>
            </div>
            </div>
            </div>
          </div>
        </div>
        <div class="myContainer">
          <div class="text">
          
            <div class="div-button">
                <div class="material-icons3">
                    <div id="zoom-In">
                    <a href="sageroomdata.html"> <img src="images/studentdata123-final.png" alt=""> </a>
                </div>
            </div>
            </div>
          </div>
        </div>
      </div>  
    </div>

    <div class="all-card">
      <div class="first-2">
        <div class="myContainer">
          <div class="text">
           
            <div class="div-button">
                <div class="material-icons4">
                    <div id="zoom-In">
                    <a href="finalalgo.php">  <img class="title-img" src="images/finalsetting011.png" alt="sage"></a>
                </div>
            </div>
            </div>
          </div>
        </div>
        <div class="myContainer">
          <div class="text">
            <div class="div-button">
                <div class="material-icons5">
                    <div id="zoom-In">
                    <a href="invigilatordata.php"> <img src="images/invigilator/invigilator-logo-final.png" alt=""> </a>  
                </div>
            </div>
              </div>
          </div>
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
        </div>
      </div>  
    </div>


    <div class="all-card">
      <div class="first-2">
        <div class="myContainer">
          <div class="text">
           
            <center>       ADD AND GENERATE TEACHER PASSWORD DATA </center>
           
            <a href="teacherdatapassword.html"> <div class="div-button">
                <div id="zoom-In"
              <p><i class="material-icons">add</i></p>
            </div></a>
        </div>
          </div>
        </div>
        <div class="myContainer">
          <div class="text">
          <center>  ADD AND GENERATE STUDENT PASSWORD DATA </center>
          <a href="studentdatapassword.html">  <div class="div-button">
                <div id="zoom-In"
              <p><i class="material-icons">add</i></p>
            </div></a>
        </div>
          </div>
        </div>
      </div>  
    </div>

  </section>


       

     
      
       

    <script
      src="https://kit.fontawesome.com/8a9d1a847a.js"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
      integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
      integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
      crossorigin="anonymous"
    ></script>
  </body>
</html>

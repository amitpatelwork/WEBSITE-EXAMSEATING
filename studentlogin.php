<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="css/login.css">
<style>
      body{
    margin: 0;
    padding: 0;
    
}

     #zoom-In:hover  {
     transform: scale(1.4);
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
img{
    height: ;
}
.amit {
  width: 100%;
  height: 100%;

  position: relative;
  animation-name: example;
  animation-duration: 4s;  
  animation-fill-mode: forwards;
}

@keyframes example {
  from {top: 320px;}
  to {top: 0px; }
}
</style>
    <div class="container">
        <div class="amit">
        <div class="card card-container">
        <div id="zoom-In" class="image">
         <img src="images/login2-modified.png" class="rounded mx-auto d-block "alt="..." >
      </div>
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" action="" method="GET">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="text" id="inputEmail" name="usr" class="form-control" placeholder="student user name" required autofocus>
                <input type="password" id="inputPassword" name="pwd" class="form-control" placeholder="password" required>
                <div id="remember" class="checkbox">
                    
                      
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-signin" name="submit" type="submit" >Sign in</button>
            </form>
        </div>
    </div>
    </div>
    <?php
    if(isset($_GET['submit'])){
    $usr=$_GET['usr'];
    $pwd=$_GET['pwd'];
    $con=new mysqli("localhost","root","","pbl2project");
    $sql="select * from studentlogin where usr='".$usr."' and pwd='".$pwd."'";
    $result = $con->query($sql);
    if ($result->num_rows > 0) {
        header("location:finalalgo.php");
    }
    else{
        header("location:index.php");
    }
    }
    ?>
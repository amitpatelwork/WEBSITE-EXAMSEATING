<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="css/login.css">
    <div class="container">
        <div class="card card-container">
            <img id="profile-img" class="profile-img-card" src="images/logo12.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" action="" method="GET">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="email" id="inputEmail" name="usr" class="form-control" placeholder="user name" required autofocus>
                <input type="password" id="inputPassword" name="pwd" class="form-control" placeholder="password" required>
                <div id="remember" class="checkbox">
                    
                      
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-signin" name="submit" type="submit" >Sign in</button>
            </form>
        </div>
    </div>
    <?php
    if(isset($_GET['submit'])){
    $usr=$_GET['usr'];
    $pwd=$_GET['pwd'];
    $con=new mysqli("localhost","root","","student");
    $sql="select * from login where usr='".$usr."' and pwd='".$pwd."'";
    $result = $con->query($sql);
    if ($result->num_rows > 0) {
        header("location:attendence.html");
    }
    else{
        header("location:loginattedence.php");
    }
    }
    ?>
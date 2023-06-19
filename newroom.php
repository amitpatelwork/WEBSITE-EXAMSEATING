
<?php
include('db.php')
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
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
.heading{
       
       margin-bottom: 100px;
       color: rgb(156, 45, 45);
       text-align: center;  
      }
</style>
</head>

<body>
    <!-- <div class="heading">
        <br>
      <h1><B>TEACHER DETAIL AND PASSWORD GENERATE PAGE</B></h1>
      </div> -->
    <div class="row">
    <div class="col-lg-3">
    
    </div>
        <div class="col-lg-6">
            <div class="container">
                <div class="amit">
        
                <div class="card card-container">
                    <center> <h3><b>ADD NEW ROOM </b></h3></center>  
             
              
               <img src="images/login2-modified.png" class="rounded mx-auto d-block "alt="..." >
              
                    <p id="profile-name" class="profile-name-card"></p>
                    <form name="form" method="post">
                           
                           <div class="form-group">
                                         <label>ROOM NO</label>
                                         <input name="roomn1" class="form-control" required>
                                         
                            </div>
                            <div class="form-group">
                                         <label>ENTER ROW NO.</label>
                                         <input name="row_no" class="form-control" required>
                                         
                            </div>
                            <div class="form-group">
                                         <label>ENTER COLUMN NO.</label>
                                         <input name="column_no"  class="form-control" required>
                                         
                            </div>
                            <div class="form-group">
                                         <label>TECHER NAME</label>
                                         <input name="teacher_name"  class="form-control" required>
                                         
                            </div>
                            <input type="submit" name="submit" class="btn btn-primary">
                            <?php
                            if(isset($_POST['submit']))
							{
                            $newUser="INSERT INTO room( roomn,row1,col,TEACHER_ALOT) VALUES ('$_POST[roomn1]','$_POST[row_no]','$_POST[column_no]','$_POST[teacher_name]')";
                            if (mysqli_query($con,$newUser))
                            {
                                echo "<script type='text/javascript'> alert('Your addition of room application has been sent')</script>";
                                
                            }
                            else
                            {
                                echo "<script type='text/javascript'> alert('Error adding user in database')</script>";
                                
                            }
                        }
                            ?>                   
                            </form>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
    
    </div>
             </div>
    </div>
</body>
</html>

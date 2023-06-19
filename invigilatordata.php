<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title> sage coding website</title>
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




</head>
<body>

<style>
       .mainpg{
        height: 1000px;
        background-color: #b4afa7;
       }
       .heading{
       
        margin-bottom: 100px;
        color: rgb(156, 45, 45);
        text-align: center;  
       }
       .invigilator-data{
       
        font-weight: bold;
        text-align: center;
        color: black;
       }
      </style>
      <section class="mainpg">
        <div class="heading">
          <br><br><br>
        <h1><B> Invigilator for examination</B></h1>
        </div>
        <div class="invigilator-data">
          <center>
          <?php

$con=new mysqli("localhost","root","","pbl2project");
$sql="select * from invigilator_data";
$result = $con->query($sql);
 if ($result) {
   // output data of each row
 echo "<table border='4'  width='900px'><tr><th>Name</th><th>Department</th><th>Email</th></tr>";
   while($row = $result->fetch_assoc()) {
 echo "<tr><td>".$row['NAME']."</td><td>".$row['DEPARTMENTNAME']."</td><td>".$row['GMAILID']."</td><tr>";
 
   }
 }
 ?>
          </center>
        </div>
      </section>
      
</body>

</html>
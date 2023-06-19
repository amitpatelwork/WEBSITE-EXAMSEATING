<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Club Record</title>
    <link
    href="https://fonts.googleapis.com/css2?family=Lobster&family=Montserrat:wght@100&family=Rubik+Beastly&family=Ubuntu:wght@300&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/sagesport.css">

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

    <section id="title" >
        <div class="container-fluid">
    <?php
  echo "<h2>Sport record </h2>";
  $con=new mysqli("localhost","root","","clubsport");
  $sql="select * from sport1";
  $result = $con->query($sql);
  if ($result->num_rows > 0) {
    // output data of each row
    $i=1;
  echo "<table border='5' width='1200px'><tr><th>Sr. No.</th><th>Name</th><th>Phone No</th><th>Gmail</th><th>Sport</th><th>School Name</th><th>Semester</th></tr>";
    while($row = $result->fetch_assoc()) {
  echo "<tr><td>".$i."</td><td>".$row['Name']."</td><td>".$row['Phone No']."</td><td>".$row['Gmail']."</td><td>".$row['Sport']."</td><td>".$row['School Name']."</td><td>".$row['Semester']."</td><td>";
  $i++;
    }
  }
  ?>
</div>
</section>

</body>
</html>
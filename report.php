<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Student</title>
    <style>
      .amit1{
        margin-right: 27%;
     margin-left: 26%;
     text-align: center;
    color: white;
    background-color: black;
      }
      .container-fluid{
    background-color: #939458;  
    height: 85px;
    margin-right: 27%;
     margin-left: 26%;
    margin-top: 2%;
    margin-bottom: 1%;
    text-align:center;
}
.demo{
  width: 400px;
  margin-left: 19%;

}

      
    </style>
</head>
<body>


<div class="container-fluid">
  <div class="a">
<h1> EXAMINATION HALL DATA </h1>
</div> 
</div>
  <section class="amit1">
  

    <?php
  echo "<br>"."<h2>ROOM NO 208 STUDENT SEATING DATA <b/> <br><br> </h2>";
  $con=new mysqli("localhost","root","","pbl2project");
  $sql="select * from stdent_data";
  $result = $con->query($sql);
  // if ($result) {
  //   // output data of each row
  // echo "<table border='5' width='900px'><tr><th>Sr. No.</th><th>Enrollment_no</th><th>NAME</th><th>Branch</th></tr>";
  //   while($row = $result->fetch_assoc()) {
  // echo "<tr><td>".$i."</td><td>".$row['Enrollment_no']."</td><td>".$row['Name']."</td><td>".$row['Branch']."</td><tr>";
  // $i++;
  //   }
  // }
  // $row = ;
  echo "<table border='5' width='700px'>
  <tr>
    <th>Enrollment_no</th>
   
  </tr>";
  while($row = mysqli_fetch_assoc($result))
  {
      if($row['id'] <= 30){
        echo "<tr>
        
                <td>".$row['Enrollment_no']."</td>
             
              <tr>";
      }else if($row['id'] <= 60){
        if($row['id'] == 31){          
          echo "<tr><td colspan = '3'><h2>ROOM NO 209 STUDENT SEATING DATA</h2></td></tr>";
        }
        echo "<tr>
                <td>".$row['Enrollment_no']."</td>
             
              <tr>";
      }
      else if($row['id'] <= 90){
        if($row['id'] == 61){          
          echo "<tr><td colspan = '3'><h2><br>ROOM NO 210 STUDENT SEATING DATA</h2><br></td></tr>";
        }
        echo "<tr>
        <td>".$row['Enrollment_no']."</td>
 
      <tr>";
      } 
      else if($row['id'] <= 120){
        if($row['id'] == 91){          
          echo "<tr><td colspan = '3'><br><h2>ROOM NO 211 STUDENT SEATING DATA</h2><br></td></tr>";
        }
        echo "<tr>
        <td>".$row['Enrollment_no']."</td>

      <tr>";
      }
      else if($row['id'] > 120){
        if($row['id'] == 121){          
          echo "<tr><td colspan = '3'><br><h2>ROOM NO 212 STUDENT SEATING DATA</h2><br></td></tr>";
        }
        echo "<tr>
        <td>".$row['Enrollment_no']."</td>
        <td>".$row['Name']."</td>
        <td>".$row['Branch']."</td>
      <tr>";
      }
    }
    
    echo "</table>";
  ?>
  
  </section>
  <br><br><br><br>
  <div class="demo">
  <img src="images/i/demo.png" alt="">
  </div>
</body>
</html>
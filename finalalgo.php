
<html>
    <head>
        <style>
           div1{
            
            display: flex;
            margin-left: 30px
           } 
           div2{
            margin-top: 100px;
            padding: 17px;
            border: 4px solid black;
            border-radius: 5%;
            font-size: 1.7rem;
            background-color: #d8d7cc;
            font-weight: bold;
           }
       
           body{
            background-color: #F6FBF4;
           }
           .red{
            font-size: 1.2rem;
           }
      .div3{
        font-weight: bold;
        text-align: center;
        color: black;
      }
        </style>
    </head>
    <body>
    <button  style="margin-left: 40px; margin-top: 50px; width: 150px; height: 40px; background-color: yellow; color: black; border: 3px solid black; border-radius: 20px; " > <a href="newroom.php"> ADD NEW ROOM </a></button>
      <CENTER>
        <BR><BR></BR></BR>
        <div class="red">
      <h1>FINAL REPORT SEAT OF EXAMINATION</h1>
      </div>
      <hr>
      </CENTER>
   
  
          <center>
<?php

$con=new mysqli("localhost","root","","pbl2project");
$sql="select * from room";
$result=$con->query($sql);
while($rows=$result->fetch_assoc()){
  echo "<div3>";
  echo "<table border='6'  width='400px'><tr><th>ROOM_NO</th><th>TEACHER ALOT</th></tr>";
  echo "<tr><td>".$rows['roomn']."</td><td>".$rows['TEACHER_ALOT']."</td><tr>";
  echo "</div3>";
$n=$rows['row1'];
$cn=$rows['col'];
display($n,$cn);
}
        function display($n,$cn){
          static $i;
          for($row=1;$row<=$n;$row++){
            echo "<div1>";
                  if($row%2==0){
                    echo "<div2>";
                        for($i=($row*$cn);$i>($cn*$row)-$cn;$i--){
                        echo get_seat_no($i)."<br>";
                       }
                       echo "</div2>";
                        echo "</div1>";
                    }
                  else{
                    echo "<div2>";
                      for($i=($row-1)*$cn+1;$i<=$row*$cn;$i++)
                      { echo " ".get_seat_no($i)."<br>";}
                      echo "</div2>";
                    }
                  }
                  echo " ";
              }          
              function get_seat_no($a)
              {
                  $con=new mysqli("localhost","root","","pbl2project");
                  $sql="select * from stdent_data where id=".$a;
                  $result = $con->query($sql);
                  while($row = mysqli_fetch_assoc($result))
                  {
                      echo $row['Enrollment_no']; }
              }
?>

</center>

        </body>
    </html>
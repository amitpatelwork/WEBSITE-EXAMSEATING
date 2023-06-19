<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</head>
<style>
    .imgreport{
        margin-left: 190px;
    }
</style>
<body>

<section class="forstpage">
    <div class="row">
        <div class="col-lg-2">
        <?php
function get_seat_no($a)
{
    $con=new mysqli("localhost","root","","pbl2project");
    $sql="select * from stdent_data where id=".$a;
    $result = $con->query($sql);
    echo "<table border='5' width='700px'>
    <tr>
      <th>Enrollment_no</th>
     
    </tr>";
    while($row = mysqli_fetch_assoc($result))
    {
        echo "<tr>       
                <td>".$row['Enrollment_no']."</td>
             
              <tr>";
}
}

echo "<table border='4' width='250px'>
<tr><th>Row 1</th>
</tr>";

$row=9;
$col=5;
$col1=1;
$col2=2;
$col3=3;
$col4=4;
$col5=5;



for($row1=1;$row1<=$row;$row1++){
    echo"<tr>
    <td>".get_seat_no($row1)."</td>";
}

$row2=$row*$col2;
for($row2;$row2>=$row1;$row2--){
    echo"<tr>
    <td>".$row2."</td>
    <tr>";
}   

$row3=$row*$col2+1;
$col03=$col3*$row;
for($row3;$row3<=$col03;$row3++){
    echo"<tr>
    <td>".$row3."</td>
    <tr>";
}
$row4=$row*$col4;
for($row4;$row4>=$row3;$row4--){
    echo"<tr>
    <td>".$row4."</td>
    <tr>";
}
$row5=$row*$col4+1;
$col5=$row*$col;
for($row5;$row5<=$col5;$row5++){
    echo"<tr>
    <td>".$row5."</td>
    <tr>";
}
echo "</table>";
?>
        </div>
        <div class="col-lg-2">
        <?php
echo "<table border='4' width='240px'>
<tr><th>Row 1</th>
</tr>";

 $row=5;
$col=5;
$col1=1;
$col2=2;
$col3=3;
$col4=4;
$col5=5;
$col6=6;
$col7=7;
$col8=8;
$col9=9;
$col10=10;

for($row1=1;$row1<=$row;$row1++){
    echo"<tr>
    <td>".$row1."</td>";
}

$row2=$row*$col2;
for($row2;$row2>=$row1;$row2--){
    echo"<tr>
    <td>".$row2."</td>
    <tr>";
}   

$row3=$row*$col2+1;
$col03=$col3*$row;
for($row3;$row3<=$col03;$row3++){
    echo"<tr>
    <td>".$row3."</td>
    <tr>";
}
$row4=$row*$col4;
for($row4;$row4>=$row3;$row4--){
    echo"<tr>
    <td>".$row4."</td>
    <tr>";
}
$row5=$row*$col4+1;
$col5=$row*$col;
for($row5;$row5<=$col5;$row5++){
    echo"<tr>
    <td>".$row5."</td>
    <tr>";
}
echo "</table>";
?>
        </div>
        <div class="col-lg-2">
        <?php

echo "<table border='4' width='240px'>
<tr><th>Row 1</th>
</tr>";

 $row=9;
$col=5;
$col1=1;
$col2=2;
$col3=3;
$col4=4;
$col5=5;
$col6=6;
$col7=7;
$col8=8;
$col9=9;
$col10=10;

for($row1=1;$row1<=$row;$row1++){
    echo"<tr>
    <td>".$row1."</td>";
}

$row2=$row*$col2;
for($row2;$row2>=$row1;$row2--){
    echo"<tr>
    <td>".$row2."</td>
    <tr>";
}   

$row3=$row*$col2+1;
$col03=$col3*$row;
for($row3;$row3<=$col03;$row3++){
    echo"<tr>
    <td>".$row3."</td>
    <tr>";
}
$row4=$row*$col4;
for($row4;$row4>=$row3;$row4--){
    echo"<tr>
    <td>".$row4."</td>
    <tr>";
}
$row5=$row*$col4+1;
$col5=$row*$col;
for($row5;$row5<=$col5;$row5++){
    echo"<tr>
    <td>".$row5."</td>
    <tr>";
}
echo "</table>";
?>
        </div>
        <div class="col-lg-2">
        <?php
echo "<table border='4' width='240px'>
<tr><th>Row 1</th>
</tr>";

 $row=10;
$col=5;
$col1=1;
$col2=2;
$col3=3;
$col4=4;
$col5=5;
$col6=6;
$col7=7;
$col8=8;
$col9=9;
$col10=10;

for($row1=1;$row1<=$row;$row1++){
    echo"<tr>
    <td>".$row1."</td>";
}

$row2=$row*$col2;
for($row2;$row2>=$row1;$row2--){
    echo"<tr>
    <td>".$row2."</td>
    <tr>";
}   

$row3=$row*$col2+1;
$col03=$col3*$row;
for($row3;$row3<=$col03;$row3++){
    echo"<tr>
    <td>".$row3."</td>
    <tr>";
}
$row4=$row*$col4;
for($row4;$row4>=$row3;$row4--){
    echo"<tr>
    <td>".$row4."</td>
    <tr>";
}
$row5=$row*$col4+1;
$col5=$row*$col;
for($row5;$row5<=$col5;$row5++){
    echo"<tr>
    <td>".$row5."</td>
    <tr>";
}
echo "</table>";
?>
        </div>

        <div class="col-lg-2">

        </div>
        <div class="col-lg-2">

        </div>

    </div> 
</section>

<section class="amit1">
    <br><br><br><br><br><br><br><br>
        <img src="images/finalreport.jpeg" class="imgreport" alt="">    
</section>
</body>
</html>
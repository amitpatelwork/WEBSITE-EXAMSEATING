
<?php
$fname=$_GET['fname'];
$contact=$_GET['contact'];
$gmail=$_GET['gmail'];
$inovation=$_GET['inovation'];
$school=$_GET['school'];
$semester=$_GET['semester'];


//echo $fname;
$con=new mysqli("localhost","root","","clubsport");
//if($con){echo "connected successfully";}
//else{echo "error";}
$sql="insert into inovation1 values('".$fname."',".$contact.",'".$gmail."','".$inovation."','".$school."','".$semester."')";

echo $sql;
if($con->query($sql))
{echo "inserted successfully";?>
    <script>alert("Inserted successfully");</script>
    <?php
    header("location:clubinovayion.html");}
    else {echo "error";}
    ?>


<?php
$fname=$_GET['fname'];
$contact=$_GET['contact'];
$gmail=$_GET['gmail'];
$school=$_GET['school'];
$semester=$_GET['semester'];


//echo $fname;
$con=new mysqli("localhost","root","","clubsport");
//if($con){echo "connected successfully";}
//else{echo "error";}
$sql="insert into cultural1 values('".$fname."',".$contact.",'".$gmail."','".$school."','".$semester."')";

echo $sql;
if($con->query($sql))
{echo "inserted successfully";?>
    <script>alert("Inserted successfully");</script>
    <?php
    header("location:clubcultural.html");}
    else {echo "error";}
    ?>

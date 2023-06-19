
<?php
$fname=$_GET['fname'];
$contact=$_GET['contact'];
$gmail=$_GET['gmail'];
$photo=$_GET['photo'];
$school=$_GET['school'];
$semester=$_GET['semester'];


//echo $fname;
$con=new mysqli("localhost","root","","clubsport");
//if($con){echo "connected successfully";}
//else{echo "error";}
$sql="insert into photography1 values('".$fname."',".$contact.",'".$gmail."','".$photo."','".$school."','".$semester."')";

echo $sql;
if($con->query($sql))
{echo "inserted successfully";?>
    <script>alert("Inserted successfully");</script>
    <?php
    header("location:clubphotography.html");}
    else {echo "error";}
    ?>

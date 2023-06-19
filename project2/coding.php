
<?php
$fname=$_GET['fname'];
$contact=$_GET['contact'];
$gmail=$_GET['gmail'];
$sport=$_GET['sport'];
$school=$_GET['school'];
$semester=$_GET['semester'];
$con=new mysqli("localhost","root","","clubsport");
$sql="insert into coding1 values('".$fname."',".$contact.",'".$gmail."','".$coding."','".$school."','".$semester."')";
echo $sql;
if($con->query($sql))
{echo "inserted successfully";?>
    <script>alert("Inserted successfully");</script>
    <?php
    header("location:clubsoding.html");}
    else {echo "error";}
    ?>

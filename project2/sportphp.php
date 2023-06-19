
<?php
$fname=$_GET['fname'];
$contact=$_GET['contact'];
$gmail=$_GET['gmail'];
$sport=$_GET['sport'];
$school=$_GET['school'];
$semester=$_GET['semester'];


//echo $fname;
$con=new mysqli("localhost","root","","clubsport");
//if($con){echo "connected successfully";}
//else{echo "error";}
$sql="insert into sport1 values('".$fname."',".$contact.",'".$gmail."','".$sport."','".$school."','".$semester."')";
echo $sql;
if($con->query($sql))
{echo "inserted successfully";?>
    <script>alert("Inserted successfully");</script>
    <?php
    header("location:clubsport.html");}
    else {echo "error";}
    ?>

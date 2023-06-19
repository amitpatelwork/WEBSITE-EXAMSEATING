<?php
$usr=$_GET['usr'];
$pwd=$_GET["pwd"];
$con=new mysqli("localhost","root","","pbl2project");
$sql="insert into studentlogin values('".$usr."','".$pwd."')";
echo $sql;
if($con->query($sql))
{echo "inserted successfully";?>
    <?php
    header("location:amit.php");}
    else {echo "error";}
    ?>
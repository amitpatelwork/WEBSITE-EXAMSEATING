<?php
$username=$_GET['username'];
$password=$_GET['password'];
$con=new mysqli("localhost","root","","pbl2project");
$sql="insert into studentlogin values('".$username."','".$password."')";
echo $sql;
if($con->query($sql))
{  header("location:seatingmain.php");
    echo "inserted successfully";?>
    <?php
    header("location:studentdata2.html");}
    else {echo "error";}
?>
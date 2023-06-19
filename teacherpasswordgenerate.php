<?php
$username=$_GET['username'];
$password=$_GET["password"];
$con=new mysqli("localhost","root","","pbl2project");
$sql="insert into teacherlogin values('".$username."','".$password."')";
echo $sql;
if($con->query($sql))
{echo "inserted successfully";?>
    <?php
    header("location:teacherdatapassword.html");}
    else {echo "error";}
    ?>
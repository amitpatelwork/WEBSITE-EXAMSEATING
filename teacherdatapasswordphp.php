<?php
$fname=$_GET['fname'];
$fdepartment=$_GET['fdepartment'];
$fGmail=$_GET['fGmail'];
$con=new mysqli("localhost","root","","pbl2project");
$sql="insert into invigilator_data values('".$fname."','".$fdepartment."','".$fGmail."')";
echo $sql;
if($con->query($sql))
{echo "inserted successfully";?>
    <?php
    header("location:teacherdatapassword.html");}
    else {echo "error";}
    ?>

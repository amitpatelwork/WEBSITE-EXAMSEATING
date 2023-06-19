<?php
$enrollment=$_GET['enrollment'];
$fname=$_GET['fname'];
$branch=$_GET['branch'];
$con=new mysqli("localhost","root","","pbl2project");
$sql="insert into stdent_data values( '".$enrollment."','".$fname."','".$branch."')";
echo $sql;
if($con->query($sql))
{echo "inserted successfully";?>
    <?php
    header("location:amit.php");}
    else {echo "error";}
    ?>

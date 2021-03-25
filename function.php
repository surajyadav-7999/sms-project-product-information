<?php
include('db.inc.php');
if(isset($_POST['submit']))
{
$phone=mysqli_real_escape_string($con,$_POST['phone']);
$dnd=mysqli_real_escape_string($con,$_POST['DND']);
    
$result= mysqli_query($con,"insert into number (phone, status) values('$phone','$dnd')");
if($result)
{
    header("location:table.php");
}
else
{
    echo "failed";
}
  
 
}
?>

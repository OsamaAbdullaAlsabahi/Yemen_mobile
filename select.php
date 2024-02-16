<?php
include_once 'DB.php';

$n1= $_POST['Email'];
$n2= $_POST['Password'];

$sql="SELECT count(*) FROM bhls.users WHERE Email ='$n1' AND Password='$n2'";
$result=mysqli_query($conaction,$sql);
$data=mysqli_fetch_array($result);
if ($data['count(*)'] >0)
{
header('location:index.php');
}
// else{

// header('location:http://localhost/westersayed/index.php');

// } 
?>
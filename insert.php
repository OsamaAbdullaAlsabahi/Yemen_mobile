<?php
include_once 'DB.php';
$f = $_POST["Firstname"];
$l = $_POST["Lastname"];
$u = $_POST["Email"];
$p = $_POST["Password"];
$c = $_POST["Confirmpassword"];

$sql = "INSERT INTO bhls.users (Firstname,Lastname,Email,password,Confirmpassword)
VALUES ('$f','$l','$u','$p','$c')";
if (mysqli_query($conaction, $sql)) {
echo "New record has been added successfully !";
} else {
echo "Error: " . $sql . ":-" . mysqli_error($conaction);
}
mysqli_close($conaction);
?>
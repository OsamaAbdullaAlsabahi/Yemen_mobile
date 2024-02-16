<?php
$host='localhost';
$username='Tariq';
//$password='Bhls772381657*';
$dbname = "bhls";
$conaction=mysqli_connect($host,$username,'',"$dbname");
if(!$conaction)
{
die('Could not Connect MySql Server:' .mysql_error());
}
?>

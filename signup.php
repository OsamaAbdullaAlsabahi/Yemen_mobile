<?php
session_start();

include ('DB.php');
include('function.php');
//'<script>alert("Welcome to Geeks for Geeks")</script>'
if($_SERVER['REQUEST_METHOD'] == "POST"){
    //something is posted u can check what
    
    $f = $_POST["Firstname"];
    $l = $_POST["Lastname"];
    $u = $_POST["Email"];
    $p = $_POST["Password"];
    $c = $_POST["Confirmpassword"];
 

   //password check
   $uppercase = preg_match('@[A-Z]@',$p);
   $lowercase = preg_match('@[a-z]@',$p);
   $number=preg_match('@[0-9]@',$p);
    
   if(!empty($f) && !empty($l) && !empty($p) && !empty($c) && !empty($u)){
    if(!(ctype_alpha($f))){
        echo "<script>alert('Name Should be Characters Only')</script>";
        // header("location: C:\xampp\htdocs\signin.php");
    }
    elseif( !$uppercase || !$lowercase || !$number || strlen($p) < 9){

    echo "<script>alert('password should be 8 characters in length and include lowercase uppercase and numbers')</script>";
   }
   elseif( $p != $c){
    header("location: index.php");
    echo "<script>alert('Passwords are not the same')</script>";
   }
    
   elseif(!(filter_var($u ,FILTER_VALIDATE_EMAIL))){
  echo  "<script>alert('Your Email is invalid')</script>";
   
   }
   else{
    $sql="INSERT INTO bhls.Users (Firstname,Lastname,Email,Password,Confirmpassword)
    VALUES ('$f','$l','$u','$p','$c')";    
    if(mysqli_query($conaction,$sql)){
        echo "<script> confirm('Your Account is created')</script>";
        header("final.php");
        
    }
    else
        echo "<script>alert('error existed....sorry!')</script>";
   }


}
else {
    echo "<script>alert('null error')</script>";
    
   }
   mysqli_close($conaction);
}

?>

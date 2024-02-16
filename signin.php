<?php  
session_start();
include('DB.php');
include('function.php');

if($_SERVER['REQUEST_METHOD'] == "POST"){
    //something is posted u can check what
    $email=$_POST["Email"];
    
    $password=$_POST["Password"];
 
    $query="SELECT * FROM  bhls.Users  WHERE Email ='$email' limit 1 ";
    $result=mysqli_query($conaction,$query);
    if($result){
     if($result && mysqli_num_rows($result) > 0)
        {
           $user_data = mysqli_fetch_assoc($result);
           if($user_data['Password'] == $password){
            $_SESSION['Email'] = $user_data['Email'];
            header("location: final.php");
           }
           else{
            echo '<script>alert("Welcome to Geeks for Geeks")</script>';
            header("location: index.php");
           }
        }
        else{
            header("location: index.php");
            echo '<script>alert("Welcome to Geeks for Geeks")</script>';}
    }
    mysqli_close($conaction);
}
?>
<?php
function check_login($conaction){
    if(isset($_SESSION['Email'])){
        $n1=$_SESSION['Email'];
        $query="SELECT * FROM  bhls.users WHERE Email ='$n1' limit 1";
        $result= mysqli_query($conaction,$query);
        if($result && mysqli_num_rows($result) > 0)
        {
           $user_data = mysqli_fetch_assoc($result);
           return $user_data;
        }
    }
    //redirect to login
    //header("location: signin.php");
    die;

}
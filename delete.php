<script src="sweetalert.min.js"></script>
<?php



if(isset($_POST['delete'])){
    include_once 'DB.php';
    // $firstname=$_POST["firstname"];
    // $lastname=$_POST["lastname"];
    // $username=$_POST["username"];
    $email=$_POST["email"];
    // $pre_password=$_POST["pre_password"];
    // $new_password=$_POST["new_password"];
    // $confirm_new_password=$_POST["confirm_new_password"];
$query="DELETE  FROM bhls.Users WHERE Email=$email " ;

if(mysqli_query($conaction,$query)){
    echo "<script> confirm('Delete')</script>";
    echo "<script> location.replace('index.php')</script> ";
}
mysqli_close($conaction);
session_destroy();
header('location: index.php');
}



// session_start();
// include('DB.php');
// include('function.php');
// $user_data=check_login($conaction);
// $email= $user_data['Email'];
// $sql="DELETE  FROM bhls.Users WHERE Email=$email " ;
// if(mysqli_query($conaction,$sql) )
// {
//     echo "<script >sweetAlert('updated','your name is updated','success')</script>";
// mysqli_close($conaction);
// session_destroy();
// header('location: index.php');}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="update.css" />
    <!-- Render All Elements Normally -->
    <link rel="stylesheet" href="css/normalize.css" />
    <title>Document</title>
</head>
<body>
<form action="" method="post">
        <!-- <img src="img/Alsharq2.png" alt="user"> -->
        <h2>delete acount details</h2>
        <label for=""></label>
        <input type="email" placeholder="@gmail.com" name="email" required>
        <input type="submit" name="delete" value="delete">
        <a href="index.php">Back to Login</a>
    </form>
</body>
</html>
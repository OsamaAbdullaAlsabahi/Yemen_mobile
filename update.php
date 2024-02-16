<?php 

// session_start();
// include('DB.php');
// include('function.php');
// $user_data=check_login($conaction);
// if( isset($_POST["delete"]))
// {
//     header('location: delete.php');
// }

    if(isset($_POST['update'])){
        include_once 'DB.php';
        $firstname=$_POST["firstname"];
        $lastname=$_POST["lastname"];
        // $username=$_POST["username"];
        $email=$_POST["email"];
        $pre_password=$_POST["pre_password"];
        $new_password=$_POST["new_password"];
        $confirm_new_password=$_POST["confirm_new_password"];
    $query="UPDATE bhls.Users SET Firstname='$firstname' ,Lastname='$lastname' , Password='$new_password',Confirmpassword='$confirm_new_password' WHERE  Password='$pre_password' AND Email='$email'";
    
    if(mysqli_query($conaction,$query)){
        echo "<script> confirm('Updated')</script>";
        echo "<script> location.replace('final.php')</script> ";
    }
    mysqli_close($conaction);
    }



    
//     if($_SERVER['REQUEST_METHOD'] == "POST"){
//         echo 'd';
//         //something is posted u can check what
//         $user_name=$_POST["Firstname"];
//         $user_name1=$_POST["Lastname"];
//         $password=strval($_POST["Password"]);
//         $cpassword=strval($_POST["Confirmpassword"]);        
//         $email=$user_data['Email'];
//         $flag=0;
// echo 'd';

//         //password check
//         $uppercase = preg_match('@[A-Z]@',$password);
//         $lowercase = preg_match('@[a-z]@',$password);
//         $number=preg_match('@[0-9]@',$password);
//         //validation
    
//         if(ctype_alpha($user_name) && !empty($user_name)  && ctype_alpha($user_name1) && !empty($user_name1)){
//         $sql= "UPDATE bhls.Users SET Firstname ='$user_name' WHERE Email='$email'";
//         $sql1= "UPDATE bhls.Users SET Lastname ='$user_name1' WHERE Email='$email'";
//             if(mysqli_query($conaction,$sql) && mysqli_query($conaction,$sql1))
//         echo "<script >sweetAlert('updated','your name is updated','success')</script>";
//         $flag=1;
//         }

           
//        if(!empty($cpassword) && !empty($password) && $password === $cpassword && $lowercase  && $uppercase && $number && strlen($password) > 8 ){
           
    
//             $sql= "UPDATE bhls.Users SET Password ='$password' WHERE Email='$email'";
//             $sql1= "UPDATE bhls.Users SET Confirmpassword ='$cpassword' WHERE Email='$email'";
//             if(mysqli_query($conaction,$sql) && mysqli_query($conaction,$sql1))
//               echo   "<script>sweetAlert('updated','your password is changed','success')</script>";
//               $flag=1;
//         }

//         if($flag==0 )
//         {
//             echo "<script>sweetAlert('ops!!','sorry either your input is in valid or some thing went wrong','error')</script>";
//         }

//     }

?>

<!DOCTYPE html>
<html lang="en">
<head>
<!-- <link rel="stylesheet" href="css/style.css"> -->
<link rel="stylesheet" href="update.css" />
    <!-- Render All Elements Normally -->
    <link rel="stylesheet" href="css/normalize.css" />
</head>
<body>


<form action="" method="post">
        <!-- <img src="img/Alsharq2.png" alt="user"> -->
        <h2>Update acount details</h2>
        <label for=""></label>
        <input type="text" placeholder="Firs Name" name="firstname" required>
        <input type="text" placeholder="Last Name" name="lastname" required>
        <!-- <input type="text" placeholder="User Name" name="username" required> -->
        <input type="email" placeholder="@gmail.com" name="email" required>
        <input type="password" placeholder="pre_password" name="pre_password" required>
        <input type="password" placeholder="new_password" name="new_password" required>
        <input type="password" placeholder="confirm_new_password" name="confirm_new_password" required>
        <input type="submit" value="update" name="update" >
        <a href="index.php">Back to Login</a>
    </form>
<!-- <div class="form signup">
                <div class="form-content">
                    <header>Signup</header>
                    <form  action="" method = "post" enctype="multipart/form-data">
                        <div class="field input-field">
                            <input type="text" placeholder="Firstname" name = "Firstname" class="input" required>
                        </div>
                        <div class="field input-field">
                            <input type="text" placeholder="Lastname" name = "Lastname" class="input" required>
                        </div>
                        <div class="field input-field">
                            <input type="email" placeholder="Email" name = "Email" class="input">
                        </div>

                        <div class="field input-field">
                            <input type="password" placeholder="Create password" name = "Password" class="password" required>
                        </div>

                        <div class="field input-field">
                            <input type="password" placeholder="Confirm password" name="Confirmpassword" class="password" required>
                            <i class='bx bx-hide eye-icon'></i>
                        </div>

                        <div class="field button-field">
                             <a  href="" class="field button-fieldv"><button name="login">Signup</button></a> 
                        </div>
                        <div class="field input-field">
                        <input type="submit" value="update" name="update" >
                            <input type="submit" name="delete" value="delete">
                            <i class='bx bx-hide eye-icon'></i>
                        </div>
                    </form>



                    <div class="form-link">
                        <span>Already have an account? <a href="#" class="link login-link">Login</a></span>
                    </div>
                </div>

                <div class="line"></div>

                <div class="media-options">
                    <a href="#" class="field facebook">
                        <i class='bx bxl-facebook facebook-icon'></i>
                        <span>Login with Facebook</span>
                    </a>
                </di+v>

                <div class="media-options">
                    <a href="#" class="field google">
                        <img src="images/google.png" alt="" class="google-img">
                        <span>Login with Google</span>
                    </a>
                </div>

            </div>

        </section> -->

        <!-- JavaScript -->
        <script src="js/script.js"></script>    
</body>
</html>
<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com-->
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Login and Signup Form </title>

        <!-- CSS -->
        <link rel="stylesheet" href="css/style.css">
                
        <!-- Boxicons CSS -->
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

                        
    </head>
    <body>
        <section class="container forms">
            <div class="form login">
                <div class="form-content">
                    <header>Login</header>
                    <form action="signin.php" method = "post" enctype="multipart/form-data">
                        <div class="field input-field">
                            <input type="email" name="Email" placeholder="Email" class="input">
                        </div>

                        <div class="field input-field">
                            <input type="password" name="Password" placeholder="Password" class="password">
                            <i class='bx bx-hide eye-icon'></i>
                        </div>

                        <div class="form-link">
                            <a href="#" class="forgot-pass">Forgot password?</a>
                        </div>
                        

                        <div class="field button-field">
                            <!-- <input type="submit" value='login to' > -->
                           <a href="final.php" class="field button-fieldv"> <button>Login</button></a>
                        </div>
                    </form>

                    <div class="form-link">
                        <span>Don't have an account? <a href="" class="link signup-link">Signup</a></span>
                    </div>
                </div>

                <div class="line"></div>

                <div class="media-options">
                    <a href="#" class="field facebook">
                        <i class='bx bxl-facebook facebook-icon'></i>
                        <span>Login with Facebook</span>
                    </a>
                </div>

                <div class="media-options">
                    <a href="#" class="field google">
                        <img src="images/google.png" alt="" class="google-img">
                        <span>Login with Google</span>
                    </a>
                </div>

            </div>

            <!-- Signup Form -->

            <div class="form signup">
                <div class="form-content">
                    <header>Signup</header>
                    <form  action="signup.php" method = "post" enctype="multipart/form-data">
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
                            <a  href="final.php" class="field button-fieldv"><button name="login">Signup</button></a>
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

        </section>

        <!-- JavaScript -->
        <script src="js/script.js"></script>
    </body>
</html>
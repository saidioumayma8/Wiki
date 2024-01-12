<?php
$title = "Login";
ob_start();
?>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="./WhatsApp Image 2024-01-08 at 14.41.27_d532e9ea.jpg" alt="CoolAdmin" width="45%">
                            </a>
                        </div>
                                    <?php if (isset($errorMessage)): ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $errorMessage; ?>
                            </div>
                        <?php endif; ?>
                        <div class="login-form">
                            <?php
                            if(isset($_POST["login"])){
                                $email = $_POST["email"];
                                $password = $_POST["password"];
                                require_once "app/models/connection.php";
                                $sql = "SELECT * FROM users WHERE email = '$email'";
                                $result = mysqli_query($conn, $sql);
                                $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                if ($user){
                                    if (password_verify($password, $user["password"])){
                                        session_start();
                                        $_SESSION['user'] = "yes";
                                        header("location : index.php");
                                        die();
                                    }
                            }else{
                                echo "<div class=\"alert alert-danger>email does not match</div>";
                            }
                        }else{
                            echo "<div class=\"alert alert-danger'>email does not match</div>";
                        }

                        
                            
                            ?>
                            <form action="login.php" method="post">
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="remember">Remember Me
                                    </label>
                                    <label>
                                        <a href="forget-pass.html">Forgotten Password?</a>
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">sign in</button>
                            </form>
                            <div class="register-link">
                                <p>
                                    Don't you have account?
                                    <a href="./signin.php">Sign Up Here</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <?php $content = ob_get_clean(); ?>
<?php include_once 'app/views/include/layout.php'; ?>
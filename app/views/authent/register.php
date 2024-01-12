<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="./WhatsApp Image 2024-01-08 at 14.41.27_d532e9ea.jpg" alt="Cool Admin" width="30%"; height="30%"/>
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a  href="#">Home</a>
                        </li>
                       
                        <li class="has-sub">
                                    <a href="register.html">sign up</a>
                        </li>
                       
                        
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="./WhatsApp Image 2024-01-08 at 14.41.27_d532e9ea.jpg" alt="Cool Admin" width="40%"; height="40%"/>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i href="index.html" class="fa-solid fa-arrow-right"></i>Home</a>
                        </li>
                        <li>
                            <a href="signup.php">
                                <i  class="fas fa-desktop"></i>sign up</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for Article &amp; Category..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                           
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->


<body>

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
                           <?php if(isset($_POST)){
                            $username = $_POST["name"];
                            $email = $_POST["email"];
                            $password = $_POST["password"];
                            $passwordhash = password_hash($password, PASSWORD_DEFAULT);
                            $errors = array();
                            if (empty($username) or empty($email) or empty($password)){
                                array_push($errors,"All fields are required");
                            }
                            if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                                array_push($errors," Email is not valid");
                            }
                            if ( strlen($password)<8){
                                array_push($errors, "password must be at least 8 characters");
                            }
                            require_once "database.php";
                            $sql = "SELECT * FROM users WHERE email= ''";
                            $result = mysqli_query($conn, $sql);
                            $rowcount = mysqli_num_rows($result);
                            if ($rowcount>0){
                                array_push($errors,"Email already exists");
                            }
                            if ( count($errors)>0){
                                foreach($errors as $error){
                                    echo "<div class='alert alert-danger'>$errors</div>";
                                }
                           }else{
                                require_once "app/models/connection.php";
                                $sql = "SELECT into users (username, email, password) values ('?', '?', '?')";
                                $stmt = mysqli_stmt_init($conn);
                                $preparestmt = mysqli_stmt_perpare($stmt, $sql);
                                if($preparestmt){
                                    mysqli_stmt_bind_param($stmt, "sss",$username, $email, $passwordhash);
                                    mysqli_stmt_execute($stmt);
                                    echo "<div class='alert alert-success'>you are registered successfully</div>";
                                }else{
                                    die("Something went wrong");
                           }
                             }
                            
                           ?>
                            <form action="regiseter.php" method="post">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="au-input au-input--full" type="text" name="username" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                                </div>
                              
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Sign up</button>
                               
                            </form>
                            <div class="register-link">
                                <p>
                                    Already have account?
                                    <a href="./signup.php">Sign In</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
   
    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->


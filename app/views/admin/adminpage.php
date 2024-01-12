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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


    <!-- Main CSS-->
    <link href="../../../public/css/theme.css" rel="stylesheet" media="all">

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
                    <img src="../../../public/img/WhatsApp Image 2024-01-08 at 14.41.27_d532e9ea.jpg" alt="Cool Admin" width="40%"; height="40%"/>
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
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
            <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <button class="au-btn au-btn-icon au-btn--blue">
                                        <i class="zmdi zmdi-plus"></i>add Article</button>
                                    <button class="au-btn au-btn-icon au-btn--blue" href="pop.php">
                                        <i class="zmdi zmdi-plus" ></i>add Category</button>
                                </div>
                            </div>
                        </div>
                    <div class="user-data m-b-30">
                                    <h3 class="title-3 m-b-30">
                                        </i>Categories</h3>
                                 
                                    <div class="table-responsive table-data">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                   
                                                    <td>categorie</td>
                                                    <td>action</td>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                   
                                                    <td>
                                                        <div class="table-data__info">
                                                            <h5>lori lynch</h6>
                                                        
                                                        </div>
                                                    </td>
                                                    <td>
                                                    <button type="button" class="btn btn-danger">delete</button>
                                                    <button type="button" class="btn btn-info">edit</button>
                                                    </td>
                                                    
                                                
                                                </tr>
                                                <tr>
                                                   
                                                    <td>
                                                        <div class="table-data__info">
                                                            <h5>lori lynch</h6>
                                                
                                                        </div>
                                                    </td>
                                                    <td>
                                                    <button type="button" class="btn btn-danger">delete</button>
                                                    <button type="button" class="btn btn-info">edit</button>
                                                    </td>
                                                   
                                                </tr>
                                               
                                                <tr>
                                                   
                                                    <td>
                                                        <div class="table-data__info">
                                                            <h5>lori lynch</h6>
                                                        </div>
                                                    </td>
                                                    <td>
                                                    <button type="button" class="btn btn-danger">delete</button>
                                                    <button type="button" class="btn btn-info">edit</button>
                                                    </td>

                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                   
                                </div>
                    <div class="user-data m-b-30">
                                    <h3 class="title-3 m-b-30">
                                        </i>Tages</h3>
                                 
                                    <div class="table-responsive table-data">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                   
                                                    <td>categorie</td>
                                                    <td>action</td>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                   
                                                    <td>
                                                        <div class="table-data__info">
                                                            <h5>lori lynch</h6>
                                                        
                                                        </div>
                                                    </td>
                                                    <td>
                                                    <button type="button" class="btn btn-danger">delete</button>
                                                    <button type="button" class="btn btn-info">edit</button>
                                                    </td>
                                                    
                                                
                                                </tr>
                                                <tr>
                                                   
                                                    <td>
                                                        <div class="table-data__info">
                                                            <h5>lori lynch</h6>
                                                
                                                        </div>
                                                    </td>
                                                    <td>
                                                    <button type="button" class="btn btn-danger">delete</button>
                                                    <button type="button" class="btn btn-info">edit</button>
                                                    </td>
                                                   
                                                </tr>
                                               
                                                <tr>
                                                   
                                                    <td>
                                                        <div class="table-data__info">
                                                            <h5>lori lynch</h6>
                                                        </div>
                                                    </td>
                                                    <td>
                                                    <button type="button" class="btn btn-danger">delete</button>
                                                    <button type="button" class="btn btn-info">edit</button>
                                                    </td>

                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                   
                                </div>
                
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
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
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


    <!-- Main JS-->
    <script src="../../../public/js/main.js"></script>

</body>

</html>
<!-- end document-->

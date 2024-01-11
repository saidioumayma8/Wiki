<?php 
$title = "Homepage";
ob_start();
?>
<?php
$pdo = new PDO( dsn: 'mysql:dbname="ofppt;host=localhost' , username: 'root' , password: '');
$categories = $pdo->query( statement: ' SELECT * FROM categorie')->fetchAll(mode: PDO::FETCH_OBJ);
?>
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
                            <a href="chart.html">
                                <i class="fas fa-chart-bar"></i>Charts</a>
                        </li>
                        <li>
                            <a href="table.html">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li>
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        <li >
                            <a  href="signin.php">
                                <i class="fas fa-copy"></i>sign in</a>
                        </li>
                        <li >
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

                        <div class="row d-flex justify-content-between">
                                <?php foreach ($wiki as $article) : ?>
                                    <div class="card col-md-4">
                                        <div>
                                            <h1>Blog Card</h1>
                                        </div>
                                        <section>
                                            <h3><?= $article['title']; ?></h3>
                                            <img src="<?= $article['img']; ?>" alt="" width="40%" height="40%">
                                            <p><?= $article['contenu']; ?></p>
                                            <p class="date"><?= $article['wiki_date']; ?></p>
                                        </section>
                                    </div>
                                <?php endforeach; ?>
                        </div>
                        <table class="table table-striped">
                            <thead>
                                <th>Categorie</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
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
                                    </div>                          <?php foreach ($categories as $categorie): ?>
                                    <tr>
                                        <td><?php $categorie->cat_date?></td>
                                        <td><?php $categorie->nom_cat?></td>
                                   
                                    </tr>

                            </tbody>

                        </table>

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
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>
    <?php $content = ob_get_clean();?>
    <?php include_once 'app/views/include/layout.php'  ?>


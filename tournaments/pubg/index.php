<?php

require $_SERVER['DOCUMENT_ROOT'] . '/autoloader.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php includeTemplate('layout/header.php', ['title' => 'Pubg']); ?>
</head>

<body style="background-image: url(/img/pubgmain.png); background-repeat:no-repeat; background-position: top;">



    <!-- Page Content -->
    <div class="container">
        <div class="row" style="margin-top:20px">
            <img src="/img/pubgmain.jpg" style="width: 220px; height: 300px; border-radius: 20px; border-color: #ff8800; margin-left: 20px">
            <div class="row" style="margin:50px">
                <p>
                    <br><br><b>The current tournament:<br></b>
                    You're not in the tournament right now.<br><br>
                    <b>Warning:<br></b>
                    You cannot join tournaments for free.
                </p>
            </div>
        </div>


        <!-- Project One -->
        <div style="margin-top:200px">
            <h3 style="text-align: center">COMING SOON</h3>
        </div>

    </div>


    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Navigation -->
    <div class="page-wrapper chiller-theme toggled" style="margin-top: -1730px">
        <a id="show-sidebar" class="btn btn-sm btn-dark" href="pubg#">
            <i class="fas fa-bars"></i>
        </a>
        <?php includeTemplate('layout/sidebar.php'); ?>
        <!-- sidebar-menu  -->
    </div>

    <!-- sidebar-content  -->
    <div class="sidebar-footer" style="height: 35px">

    </div>
    </nav>
    <!-- sidebar-wrapper  -->

    </div>
    </div>
    </div>


    </main>
    <!-- page-content" -->
    </div>
    <!-- page-wrapper -->
    <!--===============================================================================================-->
    <script src="js/main.js"></script>




    <div class="page-wrapper chiller-theme toggled">
        <a id="show-sidebar" class="btn btn-sm btn-dark" href="pubg#">
            <i class="fas fa-bars"></i>
        </a>
        <?php includeTemplate('layout/leftbar.php'); ?>
        <!-- sidebar-wrapper  -->

    </div>
    </div>
    </div>
    <!--===============================================================================================-->
    <script src="js/scripts.js"></script>

    <script src="js/main.js"></script>
    </main>
    <!-- page-content" -->
    </div>
    <!-- page-wrapper -->
    <!-- Navigation -->
</body>

</html>
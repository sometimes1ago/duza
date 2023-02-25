<?php

require $_SERVER['DOCUMENT_ROOT'] . '/autoloader.php';

if (!isset($_SESSION['user'])) {
    header('Location: /signin/');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php includeTemplate('layout/header.php', ['title' => 'Settings']); ?>
</head>

<body>

    <!-- Navigation -->
    <!-- Page Content -->
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <span class="login100-form-title" style="margin-top: -120px">
                    <p>Sorry :(</p><br>
                    We are carrying out technical work.<br>Settings be working again soon!
                </span>


                <!-- Bootstrap core JavaScript -->
                <script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
                <!--===============================================================================================-->
                <script src="../vendor/bootstrap/js/popper.js"></script>
                <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
                <!--===============================================================================================-->
                <script src="../vendor/select2/select2.min.js"></script>
                <!--===============================================================================================-->
                <script src="../vendor/tilt/tilt.jquery.min.js"></script>
                <script>
                    $('.js-tilt').tilt({
                        scale: 1.1
                    })
                </script>
                <script src="script.js"></script>
                <script src="../vendor/jquery/jquery.min.js"></script>
                <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
                <script src="../vendor/jquery/jquery.min.js"></script>
                <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
            </div>
        </div>
    </div>

    <div class="page-wrapper chiller-theme toggled" style="margin-top: -1730px">
        <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
            <i class="fas fa-bars"></i>
        </a>
        <?php includeTemplate('layout/sidebar.php') ?>
        <!-- sidebar-menu  -->
        <div class="sidebar-header" style="margin-top: -7px">
            <div class="sidebar-brand mt-10">
                <div id="close-sidebar ">
                    <h5>The home of competitive gaming.</h5>
                    <div><img class="mb-1" src="../img/icons/prize.png" style="width: 17px">
                        <b>Compete</b><br class="fs-8">Play free tournaments.
                    </div>
                </div>
            </div>
            <div class="sidebar-brand">
                <div style="display: block;">
                    <div><img class="mb-1" src="../img/icons/org.png" style="width: 16px">
                        <b>Organize</b><br class="fs-8">Run leagues and tournaments.
                    </div>
                </div>
            </div>
            <div class="sidebar-brand">
                <div style="display: block;">
                    <div><img class="mb-1" src="../img/icons/soc.png" style="width: 16px">
                        <b>Socialize</b><br class="fs-8">Find teams &amp; join communities.
                    </div>
                </div>
            </div>
            <div class="sidebar-brand">
                <div style="display: block;">
                    <div><img class="mb-1" src="../img/icons/mone.png" style="width: 16px">
                        <b>Monetize</b><br class="fs-8">Grow and monetize your community.
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- sidebar-content  -->
    <div class="sidebar-footer" style="height: 35px">

    </div>


    </main>
    <!-- page-content" -->
    </div>
    <!-- page-wrapper -->
    <!--===============================================================================================-->
    <script src="js/main.js"></script>




    <div class="page-wrapper chiller-theme toggled">
        <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
            <i class="fas fa-bars"></i>
        </a>
        <?php includeTemplate('layout/leftbar.php') ?>
        <!-- sidebar-wrapper  -->

    </div>
    </div>
    </div>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>
    <script src="js/scripts.js"></script>
    </main>
    <!-- page-content" -->
    </div>
    <!-- page-wrapper -->
</body>

</html>
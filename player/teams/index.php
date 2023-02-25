<?php

require $_SERVER['DOCUMENT_ROOT'] . '/autoloader.php';

if (!isset($_SESSION['user'])) {
    header('Location: /signin/');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php includeTemplate('layout/header.php', ['title' => 'Teams']); ?>
    <link rel="stylesheet" href="https://snipp.ru/cdn/fancybox/3.5.7/jquery.fancybox.min.css">
    <style>
        #btn-show-modal {
            padding: 10px;
            color: #777;
            background: #eee;
            display: inline-block;
            cursor: pointer;
        }

        #modal-window {
            position: fixed;
            left: 27%;
            top: 25%;
            margin-left: -25%;
            width: 100%;
            text-align: center;
            box-shadow: 0 0 15px 5px rgba(0, 0, 0, 0.1);
            display: none;
            z-index: 1;
        }

        #modal-window.visible {
            display: block;
        }

        #modal-window>.modal-title {
            display: inline-block;
            padding: 25px;
            font-size: 20px;
        }

        #modal-window>.modal-content {
            text-align: left;
            padding: 25px;
            font-size: 16px;
        }

        #modal-window>.modal-close {
            float: right;
            width: 35px;
            height: 35px;
            line-height: 35px;
            border-radius: 50%;
            cursor: pointer;
            font-size: 30px;
            margin: 15px;
            color: #ddd;
        }

        #modal-window>.modal-close:hover {
            background: #ddd;
            color: #fff;
        }
    </style>
    </style>
</head>

<body style="background-image: url('../img/profileback.png'); background-repeat: no-repeat; background-position: top;">

    <!-- Page Content -->
    <div class="limiter">
        <div">
            <!-- style="background-image: url('../img/profileback.png'); background-repeat: no-repeat; background-position: top;" -->

            <div id="myBtn" style="margin-top: 40px">
                <h4 id='btn-show-modal' onclick="modal()" class="h4-team" style="background-image: url('../img/teams/num9.png')">
                    <a href="#" class="login100-form-btn" style="width: 129px; margin-left: 700px">Join</a>
                </h4>
                <h4 id='btn-show-modal' onclick="modal()" class="h4-team" style="background-image: url('../img/teams/teamr.png')">
                    <a class="login100-form-btn" style="width: 129px; margin-left: 700px">Join</a>
                </h4>
                <h4 id='btn-show-modal' onclick="modal()" class="h4-team" style="background-image: url('../img/teams/papich.png')"><button class="login100-form-btn" style="width: 129px; margin-left: 700px">Join</button></h4>
                <h4 id='btn-show-modal' onclick="modal()" class="h4-team" style="background-image: url('../img/teams/csmonkey.png')"><button class="login100-form-btn" style="width: 129px; margin-left: 700px">Join</button></h4>
                <h4 id='btn-show-modal' onclick="modal()" class="h4-team" style="background-image: url('../img/teams/clowns.png')"><button class="login100-form-btn" style="width: 129px; margin-left: 700px">Join</button></h4>
                <h4 id='btn-show-modal' onclick="modal()" class="h4-team" style="background-image: url('../img/teams/blood.png')"><button class="login100-form-btn" style="width: 129px; margin-left: 700px">Join</button></h4>
                <h4 id='btn-show-modal' onclick="modal()" class="h4-team" style="background-image: url('../img/teams/clutch.png')"><button class="login100-form-btn" style="width: 129px; margin-left: 700px">Join</button></h4>
                <h4 id='btn-show-modal' onclick="modal()" class="h4-team" style="background-image: url('../img/teams/surf.png')"><button class="login100-form-btn" style="width: 129px; margin-left: 700px">Join</button></h4>
                <h4 id='btn-show-modal' onclick="modal()" class="h4-team" style="background-image: url('../img/teams/highpng.png')"><button class="login100-form-btn" style="width: 129px; margin-left: 700px">Join</button></h4>
            </div>
            <div id="myModal" class="modal">
                <div class="modal-content-n">
                    <span class="close">&times;11111</span>
                    <span class="poppins">Something went wrong. Please contact the team captain.</span>
                </div>
            </div>
    </div>
    <!-- /.container -->
    <script src="/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="/vendor/bootstrap/js/popper.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="/vendor/tilt/tilt.jquery.min.js"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
    <script src="script.js"></script>
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Navigation -->
    <div class="page-wrapper chiller-theme toggled" style="margin-top: -1730px">
        <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
            <i class="fas fa-bars"></i>
        </a>
        <?php includeTemplate('layout/sidebar.php'); ?>
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

    <div id='modal-window'>
        <div class="modal-content-n">
            <span class="poppins">If you have a large inventory and you are on the site for the first time then you can play without a deposit, for this you should not have items worth more than 0.30$</span>
        </div>
    </div>

    <div id='modal-window'>
        <div class="modal-content-n">
            <span class="poppins">If you have a large inventory and you are on the site for the first time then you can play without a deposit, for this you should not have items worth more than 1$</span>
        </div>
    </div>
    </main>
    <!-- page-content" -->
    </div>
    <!-- page-wrapper -->
    <!--===============================================================================================-->
    <script src="/js/main.js"></script>


    <script>
        function modal(title, content) {
            $('#modal-window').toggleClass('visible');
            $("#modal-window > .modal-title").html(title || "");
            $("#modal-window > .modal-content").html(content || "");
        }

        function modalp(title, content) {
            $('#modal-window1').toggleClass('visible');
            $("#modal-window1 > .modal-title").html(title || "");
            $("#modal-window1 > .modal-content").html(content || "");
        }

        $(document).on("mousedown", function(e) {
            if (
                $("#modal-window").hasClass('visible') &&
                e.target.className === 'modal-close' ||
                !$("#modal-window")[0].contains(e.target)
            ) {
                $("#modal-window").removeClass("visible");
            }
        });
    </script>

    <div class="page-wrapper chiller-theme toggled">
        <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
            <i class="fas fa-bars"></i>
        </a>
        <?php includeTemplate('layout/leftbar.php') ?>
        <!-- sidebar-wrapper  -->

    </div>
    </div>
    </div>
    <script src="https://snipp.ru/cdn/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://snipp.ru/cdn/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <!--===============================================================================================-->
    <script src="../js/main.js"></script>
    <script src="../js/scripts.js"></script>
    </main>
    <!-- page-content" -->
    </div>
    <!-- page-wrapper -->
    <!-- Navigation -->
</body>

</html>
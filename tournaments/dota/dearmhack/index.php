<?php

require $_SERVER['DOCUMENT_ROOT'] . '/autoloader.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php includeTemplate('layout/header.php', ['title' => 'Dream Hack']); ?>
</head>

<body style="background-image: url('/img//dreamhack.jpg'); background-repeat: no-repeat; background-position: top;">



    <!-- Page Content -->
    <div class="container" style="margin-top: 120px">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">DreamHack Weekly DotA
        </h1>


        <!-- Image Header -->

        <!--     <img class="scale" src=".../img//triallogo.png" alt=""> -->

        <!-- <div class="container" style="background-image: url(.../img//triallogo.png); background-repeat: no-repeat; min-height: 550px">
</div> -->



        <h3 style="margin-top: 50px">Format</h3><br>


        <div class="row">
            <div style="border-radius: 8px;" class="radiusJet">
                <img src="/img/icons/global.png" width="30"><br>
                <b>Game & Region</b><br>
                Dota 2. Europe, Asia, CIS
            </div>

            <div style="border-radius: 8px;" class="radiusJet">
                <img src="/img/icons/teamsize.png" width="30"><br>
                <b>Team Size</b><br>
                5 vs 5
            </div>

            <div style="border-radius: 8px;" class="radiusJet">
                <img src="/img/icons/pay.png" width="30"><br>
                <b>Entry Fee</b><br>
                Free is not for everyone
            </div>

            <div style="border-radius: 8px;" class="radiusJet">
                <img src="/img/icons/prize.png" width="30"><br>
                <b>Prize Pool</b><br>
                €50 & Qualifier
            </div>

            <div style="border-radius: 8px;" class="radiusJet">
                <img src="/img/icons/soc.png" width="30"><br>
                <b>Tournament Format</b><br>
                Single Elimination
            </div>

            <div style="border-radius: 8px;" class="radiusJet">
                <img src="/img/icons/global.png" width="30"><br>
                <b>Game & Region</b><br>
                Dota 2, Global
            </div>
        </div>

        <div class="row">
            <div style="border-radius: 8px; border-color: #2e3947" class="radiusLine">
            </div>
        </div>


        <!-- СПОЙЛЕР -->


        <!-- СПОЙЛЕР -->





        <p>
        <h3>Information</h3>
        </p>

        <p><b>DreamHack Weekly DotA on FSL Season!<br>
                If you have trouble joining the lobby in-game, please check your Social Settings and allow game
                invitations from non-friends. <br>
            </b>

        <div class="row">
            <div style="border-radius: 8px; border-color: #2e3947" class="radiusLine">
            </div>
        </div>

        <p>
        <h3>Hosted by DreamHack</h3>
        </p>

        <p><b>A new era of athletes deserves a new level of equipment.</p>
        <p>World of Gamers. Community of friends 🧡 Game all night long at DreamHack! Esports, Cosplay, BYOC,
            activities and more! We have it all at DreamHack 😍</p>




    </div>
    </div>
    <!-- /.container -->

    <!-- Bootstrap core JavaScript -->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Navigation -->
    <div class="page-wrapper chiller-theme toggled" style="margin-top: -1730px">
        <a id="show-sidebar" class="btn btn-sm btn-dark" href="DreamHack#">
            <i class="fas fa-bars"></i>
        </a>
        <?php includeTemplate('layout/sidebar.php') ?>
        <!-- sidebar-menu  -->
        <div class="sidebar-header" style="margin-top: -7px">
            <div class="sidebar-brand mt-10">
                <div id="close-sidebar ">
                    <h5>The home of competitive gaming.</h5>
                    <div><img class="mb-1" src=".../img//icons/prize.png" style="width: 17px">
                        <b>Compete</b><br class="fs-8">Play free tournaments.
                    </div>
                </div>
            </div>
            <div class="sidebar-brand">
                <div style="display: block;">
                    <div><img class="mb-1" src=".../img//icons/org.png" style="width: 16px">
                        <b>Organize</b><br class="fs-8">Run leagues and tournaments.
                    </div>
                </div>
            </div>
            <div class="sidebar-brand">
                <div style="display: block;">
                    <div><img class="mb-1" src=".../img//icons/soc.png" style="width: 16px">
                        <b>Socialize</b><br class="fs-8">Find teams &amp; join communities.
                    </div>
                </div>
            </div>
            <div class="sidebar-brand">
                <div style="display: block;">
                    <div><img class="mb-1" src=".../img//icons/mone.png" style="width: 16px">
                        <b>Monetize</b><br class="fs-8">Grow and monetize your community.
                    </div>
                </div>
            </div>
        </div>

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
        <a id="show-sidebar" class="btn btn-sm btn-dark" href="DreamHack#">
            <i class="fas fa-bars"></i>
        </a>
        <?php includeTemplate('layout/leftbar.php') ?>
        <!-- sidebar-wrapper  -->

    </div>
    </div>
    </div>
    <!--===============================================================================================-->
    <script src="/js/main.js"></script>
    <script src="/js/scripts.js"></script>
    </main>
    <!-- page-content" -->
    </div>
    <!-- page-wrapper -->
    <!-- Navigation -->
</body>

</html>
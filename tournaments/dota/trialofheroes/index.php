<?php

require $_SERVER['DOCUMENT_ROOT'] . '/autoloader.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php includeTemplate('layout/header.php', ['title' => 'Trial of heroes']); ?>
</head>

<body style="background-image: url('/img/trialmain.jpg'); background-repeat: no-repeat; background-position: top;">

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">Trail of Heroes
        </h1>


        <!-- Image Header -->

        <!--     <img class="scale" src="img/triallogo.png" alt=""> -->

        <!-- <div class="container" style="background-image: url(img/triallogo.png); background-repeat: no-repeat; min-height: 550px">
</div> -->


        <p style="margin-top: 10px">
        <h3>
            <center>The tournament will begin in</center>
        </h3>
        </p><br>
        <script src="https://megatimer.ru/get/239916bc825d12bede4cb11bee3b25ad.js"></script><br>

        <h3>Format</h3><br>


        <div class="row">
            <div style="border-radius: 8px;" class="radiusJet">
                <img src="/img/icons/global.png" width="30"><br>
                <b>Game & Region</b><br>
                Dota 2. Europe, Asia, CIS
            </div>

            <div style="border-radius: 8px;" class="radiusJet">
                <img src="/img/icons/teamsize.png" width="30"><br>
                <b>Team Size</b><br>
                1 vs 1
            </div>

            <div style="border-radius: 8px;" class="radiusJet">
                <img src="/img/icons/pay.png" width="30"><br>
                <b>Entry Fee</b><br>
                Free is not for everyone
            </div>

            <div style="border-radius: 8px;" class="radiusJet">
                <img src="/img/icons/prize.png" width="30"><br>
                <b>Prize Pool</b><br>
                $10
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

        <p><b>Trial of Heroes: Pudge/Windranger/Lina<br>
                This tournament has a limited hero pool, test your skill and prover yourself to be the Lina
                Challengermode Master.</p>

        The champion you are allowed to pick is<br>
        Pudge/Windranger/Lina</b>

        <div class="row">
            <div style="border-radius: 8px; border-color: #2e3947" class="radiusLine">
            </div>
        </div>

        <p>
        <h3>Rules</h3>
        </p>

        <p><b>You are only allowed to pick Lina - if you pick a different hero, you will automatically lose at the end
                of the match.</p>
        <p>Both players are able to pick the same hero. After the first player picks the hero, it will be grayed out -
            the second player is still able to pick this hero however.</p>

        <p>Win Condition<br>
            2 Kills or First Tower</p></b>

        <div class="row">
            <div style="border-radius: 8px; border-color: #2e3947" class="radiusLine">
            </div>
        </div>


        <!-- Marketing Icons Section -->
        <p>
        <h3>Heroes for today</h3>
        </p><br>
        <div class="row" style="margin-bottom: 15px">
            <div class="col-lg-4 mb-4">
                <div class="card h-70 text-center">
                    <img class="card-img-top" src="https://i.imgur.com/JSczoDp.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card h-70 text-center">
                    <img class="card-img-top" src="https://i.imgur.com/YSOZ5HK.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card h-70 text-center">
                    <img class="card-img-top" src="https://i.imgur.com/MCCJfhq.jpg" alt="">
                </div>
            </div>
        </div>
        <!-- /.row -->



    </div>
    </div>
    <!-- /.container -->

    <!-- Bootstrap core JavaScript -->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Navigation -->
    <div class="page-wrapper chiller-theme toggled" style="margin-top: -1730px">
        <a id="show-sidebar" class="btn btn-sm btn-dark" href="TrialOfHeroes#">
            <i class="fas fa-bars"></i>
        </a>
        <?php includeTemplate('layout/sidebar.php'); ?>
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
        <a id="show-sidebar" class="btn btn-sm btn-dark" href="TrialOfHeroes#">
            <i class="fas fa-bars"></i>
        </a>
        <!-- sidebar-menu  -->
        <?php includeTemplate('layout/leftbar.php'); ?>
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
    <!-- Navigation -->
</body>

</html>
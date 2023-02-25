<?php

require $_SERVER['DOCUMENT_ROOT'] . '/autoloader.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php includeTemplate('layout/header.php', ['title' => 'Team Fortress 2']); ?>
</head>

<body style="background-image: url(/img/tf2main.png); background-repeat:no-repeat; background-position: top;">


    <!-- Page Content -->
    <div class="container">
        <div class="row" style="margin-top:20px">
            <img src="/img/tf2main.jpg" style="width: 220px; height: 300px; border-radius: 20px; border-color: #ff8800; margin-left: 20px">
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
        <div class="tournament-item-container" style="margin-top: 25px; margin-bottom: 25px;">
            <div class="tournament-item clear" style="margin-top: 15px; margin-bottom: 15px;">
                <a locale="en" href="/tournaments/teamfortress2/tf2weekly/">
                    <div class="tournament-item-image" style="background-image: url(/img/tf2week.jpg);">
                        <div class="small-box text-blue">ONGOING</div>
                    </div>
                    <div class="tournament-item-content tablet-grid-12">
                        <div class="text-white font-l tournament-item-headline">
                            <h2 class="truncate">Weekly Tournament</h2>
                            <div class="tournament-item-winner"></div>
                        </div>
                        <div class="tournament-info-container">
                            <div class="tournament-info-item">
                                <div>PRIZE</div>
                                <div class="text-white truncate">$120</div>
                            </div>
                            <div class="tournament-info-item">
                                <div>Entry Fee</div><span class="text-white">Unknown</span>
                            </div>
                            <div class="tournament-info-item">
                                <div class="tournament-label">RANK RESTRICTION</div><span class="text-white">No rank
                                    restractions</span>
                            </div>
                            <div class="tournament-info-item">
                                <div>SERVER</div><span class="text-white">Europe</span>
                            </div>
                            <div class="tournament-info-item">
                                <div>SLOTS</div><span class="text-white">12/16</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="tournament-item-container" style="margin-top: 25px; margin-bottom: 25px;">
                <div class="tournament-item clear" style="margin-top: 15px; margin-bottom: 15px;">
                    <a locale="en" href="/tournaments/teamfortress2/tf2golden/">
                        <div class="tournament-item-image" style="background-image: url(/img/tf2gold.jpg);">
                            <div class="small-box text-blue">ONGOING</div>
                        </div>
                        <div class="tournament-item-content tablet-grid-12">
                            <div class="text-white font-l tournament-item-headline">
                                <h2 class="truncate">Golden Cup</h2>
                                <div class="tournament-item-winner"></div>
                            </div>
                            <div class="tournament-info-container">
                                <div class="tournament-info-item">
                                    <div>PRIZE</div>
                                    <div class="text-white truncate">€10</div>
                                </div>
                                <div class="tournament-info-item">
                                    <div>Entry Fee</div><span class="text-white">Free to enter</span>
                                </div>
                                <div class="tournament-info-item">
                                    <div class="tournament-label">RANK RESTRICTION</div><span class="text-white">No rank
                                        restractions</span>
                                </div>
                                <div class="tournament-info-item">
                                    <div>SERVER</div><span class="text-white">Europe</span>
                                </div>
                                <div class="tournament-info-item">
                                    <div>SLOTS</div><span class="text-white">18/32</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Navigation -->
    <div class="page-wrapper chiller-theme toggled" style="margin-top: -1730px">
        <a id="show-sidebar" class="btn btn-sm btn-dark" href="teamfortress2#">
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
    <script src="../js/main.js"></script>




    <div class="page-wrapper chiller-theme toggled">
        <a id="show-sidebar" class="btn btn-sm btn-dark" href="teamfortress2#">
            <i class="fas fa-bars"></i>
        </a>
        <?php includeTemplate('layout/leftbar.php') ?>
        <!-- sidebar-wrapper  -->

    </div>
    </div>
    </div>
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
<?php

require $_SERVER['DOCUMENT_ROOT'] . '/autoloader.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php includeTemplate('layout/header.php', ['title' => 'Dota 2']); ?>
</head>

<body style="background-image: url(/img/dotamain.png); background-repeat:no-repeat; background-position: top;">
    <!-- Page Content -->
    <div class="container">
        <div class="row" style="margin-top:20px">
            <img src="/img/dotaMain1.jpg" style="width: 220px; height: 300px; border-radius: 20px; border-color: #ff8800; margin-left: 20px">
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
        <div class="tournament-item clear" style="margin-top: 15px; margin-bottom: 15px;">
            <a locale="en" href="/tournaments/dota/trialofheroes/">
                <div class="tournament-item-image" style="background-image: url(/img/upTrial.jpg);">
                    <div class="small-box text-blue">ONGOING</div>
                </div>
                <div class="tournament-item-content tablet-grid-12">
                    <div class="text-white font-l tournament-item-headline">
                        <h2 class="truncate">Trial Of Heroes #41 - Pudge</h2>
                        <div class="tournament-item-winner"></div>
                    </div>
                    <div class="tournament-info-container">
                        <div class="tournament-info-item">
                            <div>PRIZE</div>
                            <div class="text-white truncate">$10</div>
                        </div>
                        <div class="tournament-info-item">
                            <div>Entry Fee</div><span class="text-white">Free to enter</span>
                        </div>
                        <div class="tournament-info-item">
                            <div class="tournament-label">RANK RESTRICTION</div><span class="text-white">Divine 5</span>
                        </div>
                        <div class="tournament-info-item">
                            <div>SERVER</div><span class="text-white">Europe</span>
                        </div>
                        <div class="tournament-info-item">
                            <div>SLOTS</div><span class="text-white">28/32</span>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="tournament-item-container" style="margin-top: 25px; margin-bottom: 25px;">
            <div class="tournament-item clear" style="margin-top: 15px; margin-bottom: 15px;">
                <a locale="en" href="/tournaments/dota/theaegisdefensive/">
                    <div class="tournament-item-image" style="background-image: url(/img/upDota.jpg);">
                        <div class="small-box text-blue">ONGOING</div>
                    </div>
                    <div class="tournament-item-content tablet-grid-12">
                        <div class="text-white font-l tournament-item-headline">
                            <h2 class="truncate">The Aegis Defensive #5</h2>
                            <div class="tournament-item-winner"></div>
                        </div>
                        <div class="tournament-info-container">
                            <div class="tournament-info-item">
                                <div>PRIZE</div>
                                <div class="text-white truncate">150$ + 25 Level Compendium</div>
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
                                <div>SLOTS</div><span class="text-white">13/16</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="tournament-item clear" style="margin-top: 15px; margin-bottom: 15px;">
                <a locale="en" href="/tournaments/dota/dearmhack/">
                    <div class="tournament-item-image" style="background-image: url(/img/DreamDota.jpg);">
                        <div class="small-box-start text-blue">STARTS IN: 18:20</div>
                    </div>
                    <div class="tournament-item-content tablet-grid-12">
                        <div class="text-white font-l tournament-item-headline">
                            <h2 class="truncate">DreamHack Weekly DotA DHW Special #15</h2>
                            <div class="tournament-item-winner"></div>
                        </div>
                        <div class="tournament-info-container">
                            <div class="tournament-info-item">
                                <div>PRIZE</div>
                                <div class="text-white truncate">Qualifier</div>
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
                                <div>SLOTS</div><span class="text-white">22/24</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>


            <div class="tournament-item clear" style="margin-top: 15px; margin-bottom: 15px;">
                <a locale="en" href="/tournaments/dota/trialofheroes/">
                    <div class="tournament-item-image" style="background-image: url(/img/kotl.jpg);">
                        <div class="small-box-start text-blue">STARTS IN: 23:10</div>
                    </div>
                    <div class="tournament-item-content tablet-grid-12">
                        <div class="text-white font-l tournament-item-headline">
                            <h2 class="truncate">Trial Of Heroes #42 - Keeper of the Light</h2>
                            <div class="tournament-item-winner"></div>
                        </div>
                        <div class="tournament-info-container">
                            <div class="tournament-info-item">
                                <div>PRIZE</div>
                                <div class="text-white truncate">$10</div>
                            </div>
                            <div class="tournament-info-item">
                                <div>Entry Fee</div><span class="text-white">Free to enter</span>
                            </div>
                            <div class="tournament-info-item">
                                <div class="tournament-label">RANK RESTRICTION</div><span class="text-white">Divine
                                    5</span>
                            </div>
                            <div class="tournament-info-item">
                                <div>SERVER</div><span class="text-white">Europe</span>
                            </div>
                            <div class="tournament-info-item">
                                <div>SLOTS</div><span class="text-white">13/32</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="tournament-item clear" style="margin-top: 15px; margin-bottom: 15px;">
                <a locale="en" href="/tournaments/dota/trialofheroes/">
                    <div class="tournament-item-image" style="background-image: url(/img/bs.jpg);">
                        <div class="small-box-start text-blue">STARTS IN: 23:45</div>
                    </div>
                    <div class="tournament-item-content tablet-grid-12">
                        <div class="text-white font-l tournament-item-headline">
                            <h2 class="truncate">Trial Of Heroes #43 - Bloodseeker</h2>
                            <div class="tournament-item-winner"></div>
                        </div>
                        <div class="tournament-info-container">
                            <div class="tournament-info-item">
                                <div>PRIZE</div>
                                <div class="text-white truncate">$5</div>
                            </div>
                            <div class="tournament-info-item">
                                <div>Entry Fee</div><span class="text-white">Unknown</span>
                            </div>
                            <div class="tournament-info-item">
                                <div class="tournament-label">RANK RESTRICTION</div><span class="text-white">Divine
                                    5</span>
                            </div>
                            <div class="tournament-info-item">
                                <div>SERVER</div><span class="text-white">Europe</span>
                            </div>
                            <div class="tournament-info-item">
                                <div>SLOTS</div><span class="text-white">8/32</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="tournament-item clear" style="margin-top: 15px; margin-bottom: 15px;">
                <a locale="en" href="/tournaments/dota/theaegisdefensive/">
                    <div class="tournament-item-image" style="background-image: url(/img/upDota.jpg);">
                        <div class="small-box-start text-blue">SOON</div>
                    </div>
                    <div class="tournament-item-content tablet-grid-12">
                        <div class="text-white font-l tournament-item-headline">
                            <h2 class="truncate">The Aegis Defensive #16</h2>
                            <div class="tournament-item-winner"></div>
                        </div>
                        <div class="tournament-info-container">
                            <div class="tournament-info-item">
                                <div>PRIZE</div>
                                <div class="text-white truncate">100$</div>
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
                                <div>SLOTS</div><span class="text-white">27/32</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="tournament-item clear" style="margin-top: 15px; margin-bottom: 15px;">
                <a locale="en" href="s/tournaments/dota/dearmhack/">
                    <div class="tournament-item-image" style="background-image: url(/img/DreamDota.jpg);">
                        <div class="small-box-start text-blue">SOON</div>
                    </div>
                    <div class="tournament-item-content tablet-grid-12">
                        <div class="text-white font-l tournament-item-headline">
                            <h2 class="truncate">DreamHack Weekly DotA DHW Special #16</h2>
                            <div class="tournament-item-winner"></div>
                        </div>
                        <div class="tournament-info-container">
                            <div class="tournament-info-item">
                                <div>PRIZE</div>
                                <div class="text-white truncate">Qualifier</div>
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
                                <div>SLOTS</div><span class="text-white">12/24</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

        </div>


        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- Navigation -->
        <div class="page-wrapper chiller-theme toggled" style="margin-top: -1730px">
            <a id="show-sidebar" class="btn btn-sm btn-dark" href="dota#">
                <i class="fas fa-bars"></i>
            </a>
            <?php includeTemplate('layout/sidebar.php') ?>
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
        <a id="show-sidebar" class="btn btn-sm btn-dark" href="dota#">
            <i class="fas fa-bars"></i>
        </a>
        <?php includeTemplate('layout/leftbar.php') ?>
        <!-- sidebar-wrapper  -->

    </div>
    </div>
    </div>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>
    </main>
    <!-- page-content" -->
    </div>
    <!-- page-wrapper -->
    <!-- Navigation -->
</body>

</html>
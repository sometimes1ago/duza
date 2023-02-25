<?php

require $_SERVER['DOCUMENT_ROOT'] . '/autoloader.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php includeTemplate('layout/header.php', ['title' => 'Feed']); ?>
</head>

<body>
    <!-- Page Content -->
    <div class="limiter">
        <div class="feed-main">
            <div class="feed-wrap">
                <span class="feed-top">
                    Cyber Pro <img src="/img/icons/verif.png" style="width: 13px">
                </span>
                <p class="text-muted" style="margin-top: -15px">a month ago</p>
                <span><b>What better place to tell you about the new Feed feature than the Feed itself?! This place is
                        where Cyber Pro will show you posts from all the Spaces you're a member of in one handy
                        location. <br><br>It's the place to check for news and info from your favorite tournament
                        organizers, brands or communities.</b><br><br>
                    <img src="/img/feed-1.png" style="width: 650px"></span>
            </div>
            <br>

            <div class="feed-wrap">
                <span class="feed-top">
                    CYBER Pro <img src="/img/icons/verif.png" style="width: 13px">
                </span>
                <p class="text-muted" style="margin-top: -15px">2 months ago</p>
                <span><b>Queue up for official ranked games in Dota 2 and get rewarded!<br><br>

                        The Dota 2 Daily Ladder just launched here on CyberPro and will let players get rewarded by
                        competing in official Ranked Games in the Dota 2 Client.<br><br>

                        Based on your personal performance you will receive a score which will be compared to everyone
                        else in the same ladder.</b><br><br>
                    <img src="/img/feed-2.png" style="width: 650px"></span>
            </div>

            <div class="feed-wrap">
                <span class="feed-top">
                    Cyber Pro <img src="/img/icons/verif.png" style="width: 13px">
                </span>
                <p class="text-muted" style="margin-top: -15px">6 months ago</p>
                <span><b>With the recent launch of Dota 2 DreamHack are rolling out their €9000 tournament series
                        exlusive to Cyber Pro.<br><br> Read more about the tournament series on our blog and join the
                        tournaments via the left sidebar.</b><br><br>
                    <img src="/img/feed-3.png" style="width: 650px"></span>
            </div>


            <!-- Bootstrap core JavaScript -->
            <script src="/vendor/jquery/jquery.min.js"></script>
            <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        </div>
    </div>
    </div>

    <div class="page-wrapper chiller-theme toggled" style="margin-top: -1730px">
        <a id="show-sidebar" class="btn btn-sm btn-dark" href="feed.html#">
            <i class="fas fa-bars"></i>
        </a>
        <?php includeTemplate('layout/sidebar.php', ['user' => $_SESSION['user']]); ?>
        <!-- sidebar-wrapper  -->

    </div>
    </div>
    </div>


    </main>
    <!-- page-content" -->
    </div>
    <!-- page-wrapper -->
    <!--===============================================================================================-->
    <script src="/js/main.js"></script>




    <div class="page-wrapper chiller-theme toggled">
        <a id="show-sidebar" class="btn btn-sm btn-dark" href="feed.html#">
            <i class="fas fa-bars"></i>
        </a>
        <?php includeTemplate('layout/leftbar.php') ?>
        <!-- sidebar-wrapper  -->

    </div>
    </div>
    </div>
    <!--===============================================================================================-->
    <script src="/js/scripts.js"></script>
    </main>
    <!-- page-content" -->
    </div>
    <!-- page-wrapper -->
    <!-- Navigation -->
</body>

</html>
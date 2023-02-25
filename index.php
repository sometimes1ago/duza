<?php
require 'autoloader.php';

if (Cookie::getCookie('rememberToken')) {
    Auth::loginByToken(Cookie::getCookie('rememberToken'));
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php includeTemplate('layout/header.php', ['title' => 'Home']); ?>
</head>

<body>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active" style="background-image: url('https://i.ibb.co/FXM4hSk/image.png')">
                <div class="carousel-caption d-none d-md-block">
                </div>
                <?php if (Auth::isAuthentificated() === false) : ?>
                    <div class="container-join">
                        <a class="join" href="/signup/">Join now!</a>
                    </div>
                <?php endif; ?>
            </div>
            <div class="carousel-item" style="background-image: url('https://i.ibb.co/6YVnqND/image.png')">
                <div class="carousel-caption d-none d-md-block">
                </div>
                <?php if (Auth::isAuthentificated() === false) : ?>
                    <div class="container-join">
                        <a class="join" href="/signup/">Join now!</a>
                    </div>
                <?php endif; ?>
            </div>
            <div class="carousel-item" style="background-image: url('https://i.ibb.co/h1dmZhf/image.png')">
                <div class="carousel-caption d-none d-md-block">
                </div>
                <?php if (Auth::isAuthentificated() === false) : ?>
                    <div class="container-join">
                        <a class="join" href="/signup/">Join now!</a>
                    </div>
                <?php endif; ?>
            </div>
            <div class="carousel-item" style="background-image: url('https://i.ibb.co/d5T6Fqq/image.png')">
                <div class="carousel-caption d-none d-md-block">
                </div>
                <?php if (Auth::isAuthentificated() === false) : ?>
                    <div class="container-join">
                        <a class="join" href="/signup/">Join now!</a>
                    </div>
                    <?php endif; ?>>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev" style="margin-left: 10px">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next" style="margin-right: 10px">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    </header>

    <!-- Page Content -->

    <!-- DOTA, CSGO, PUBG cards -->
    <div class="container">
        <h4 class="my-4" style="border-radius: 8px 8px; padding: 13px; background-color: #2f3643; background-image: url('img/liner.png'); text-align: center;">
            About</h4>
    </div>
    <div class="row">
        <!-- После картинок -->
        <section class="page-section" id="about">
            <div class="container-section">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h5 class="section-subheading text-muted">CYBER Pro connects you with other gamers<br> and
                            enables you to compete for money and prizes.</h4>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-12">
                        <ul class="timeline" style="margin-left:30px">
                            <li>
                                <div class="timeline-image">
                                    <img class="rounded-circle img-fluid" src="img/dotaline.jpg" alt="">
                                </div>
                                <div class="timeline-panel mt-4">
                                    <div class="timeline-heading">
                                        <h4 class="subheading">PLAY BETTER GAMES</h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted">Find others to play with in seconds!<br>
                                            You’ll get matched with equally ranked and <br>like-minded gamers to
                                            improve your skill and learn from the best!</p>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-inverted">
                                <div class="timeline-image">
                                    <img class="rounded-circle img-fluid" src="img/csgoline.jpg" alt="">
                                </div>
                                <div class="timeline-panel mt-4">
                                    <div class="timeline-heading">
                                        <h4></h4>
                                        <h4 class="subheading">TRACK YOUR STATS</h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted">Do more than just play... <br>Advanced stats let you
                                            track your progress <br>as you climb through the ranks.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="timeline-image">
                                    <img class="rounded-circle img-fluid" src="img/midas.jpg" alt="">
                                </div>
                                <div class="timeline-panel mt-5">
                                    <div class="timeline-heading">
                                        <h4 class="subheading">PLAY AND EARN</h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted">Gather your stack to compete in thrilling team cups
                                            <br>or challenge yourself in 1v1 mid only tournaments. <br>Win money
                                            playing Dota!

                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-inverted">
                                <div class="timeline-image">
                                    <img class="rounded-circle img-fluid" src="img/pubgline.jpg" alt="">
                                </div>
                                <div class="timeline-panel mt-4">
                                    <div class="timeline-heading">
                                        <h4 class="subheading">DAILY TOURNAMENTS</h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted">On CYBER Pro we run daily,<br> fully automated Dota 2
                                            tournaments <br>in a wide range of game modes.!
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- После картинок -->
    </div>
    <!-- /.row -->
    <div class="container" style="margin-top: 60px">
        <h4 class="my-4" style="border-radius: 8px 8px; padding: 13px; background-color: #2f3643; background-image: url('img/liner.png'); text-align: center;">
            Choose your game</h4>
        <!-- DOTA, CSGO, PUBG cards -->
        <div class="row" style=" padding: 9px;">
            <a href="/tournaments/dota/"><img class="m4" src="img/trialmain.png"></a></p>
            <a href="/tournaments/csgo/"><img class="m4" src="img/csgocard.png"></a></p>
            <a href="/tournaments/teamfortress2/"><img class="m4" src="img/tfcard.png"></a></p>
        </div>
        <!-- Upcoming Tournaments -->
        <div class="tournament-item-container">
            <h4 class="my-4" style="border-radius: 8px 8px; padding: 13px; background-color: #2f3643; background-image: url('img/liner.png'); text-align: center;">
                Upcoming Tournaments</h4>
            <div class="tournament-item clear">
                <a locale="en" href="/tournaments/dota/theaegisdefensive/">
                    <div class="tournament-item-image" style="background-image: url(https://i.ibb.co/hgyz4YW/AP.png);">
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
                                <div class="text-white truncate">150$</div>
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
                <a locale="en" id="btn" href="/tournaments/csgo/ace/">
                    <div class="tournament-item-image" style="background-image: url(https://i.ibb.co/t4r2ZVK/6.png);">
                        <div class="small-box text-blue">ONGOING</div>
                    </div>
                    <div class="tournament-item-content tablet-grid-12">
                        <div class="text-white font-l tournament-item-headline">
                            <h2 class="truncate">ACE</h2>
                            <div class="tournament-item-winner"></div>
                        </div>
                        <div class="tournament-info-container">
                            <div class="tournament-info-item">
                                <div>PRIZE</div>
                                <div class="text-white truncate">180$</div>
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
                                <div>SLOTS</div><span class="text-white">12/24</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="tournament-item clear" style="margin-top: 15px; margin-bottom: 15px;">
                <a locale="en" href="/tournaments/dota/trialofheroes/">
                    <div class="tournament-item-image" style="background-image: url(https://i.ibb.co/hgyz4YW/AP.png);">
                        <div class="small-box text-blue">ONGOING</div>
                    </div>
                    <div class="tournament-item-content tablet-grid-12">
                        <div class="text-white font-l tournament-item-headline">
                            <h2 class="truncate">Trial Of Heroes #41</h2>
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
                                <div>SLOTS</div><span class="text-white">28/32</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <!-- /.row -->

        <!-- Features Section -->
        <div class="row">
            <div class="col-lg-6">
                <h4>Raffles system</h4>
                <strong>
                    <p>
                    <h5>How does it work?</h5>
                    </p>
                </strong>
                <p><strong>Tier System</strong><br>
                    cyberprocup.com uses a tiered system when it comes to raffle tickets:</p>
                <ul>
                    <strong style="color: #aa8559">
                        <li>Bronze Tier</li>
                    </strong>
                    <p class="text-muted">Bronze raffle tickets are our easiest ticket to get and can be used to
                        enter our daily raffles.</p>
                    <strong style="color: #9c9c9c">
                        <li>Silver Tier</li>
                    </strong>
                    <p class="text-muted">Silver raffle tickets are harder to get than bronze tickets and can be
                        used to enter our weekly silver raffles.</p>
                    <strong style="color: #ffc600">
                        <li>Gold Tier</li>
                    </strong>
                    <p class="text-muted">Gold raffle tickets are by far the hardest to get but are used to enter
                        our largest prize pool raffles.</p>
                </ul>
            </div>
            <div class="col-lg-6">
                <img class="img" style="width: 535px" src="img/info.png" alt="">
            </div>
        </div>
        <!-- /.row -->
        <hr>

        <!-- Call to Action Section -->
    </div>
    <!-- /.container -->
    <!-- Bootstrap core JavaScript -->
    <!-- Увеличение картинок hover -->
    <style>
        .scale {
            transition: 0.4s;
            /* Время эффекта */
        }

        .scale:hover {
            transform: scale(1.1);
            opacity: 1
                /* Увеличиваем масштаб */
        }
    </style>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Navigation -->

    <!-- Navigation -->
</body>

</html>
<div class="page-wrapper chiller-theme toggled" style="margin-top: -1730px">
    <a id="show-sidebar" class="btn btn-sm btn-dark" href="index">
        <i class="fas fa-bars"></i>
    </a>
    <?php includeTemplate('/layout/leftbar.php'); ?>
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
    <a id="show-sidebar" class="btn btn-sm btn-dark" href="index#">
        <i class="fas fa-bars"></i>
    </a>
    <nav id="sidebar" class="sidebar-wrapper-left">
        <div class="sidebar-content">

            <div class="sidebar-header">
                <a href="/">
                    <img class="img-responsive img-rounded" src="https://ic.wampi.ru/2023/01/03/imagecfb64d228687a61f.png" alt="User picture" style="height: 50px; width: 190px"></a>
            </div>

            <div class="sidebar-menu">
                <ul>
                    <li class="header-menu">
                        <span>General</span>
                    </li>
                    <li><a href="index" class="transition">
                            <i class="fa fa-home"></i>
                            <span>Home</span>
                        </a></li>

                    <li><a type="button" id="feed">
                            <i class="fa fa-rss"></i>
                            <span>Feed</span>
                            <span class="badge badge-pill badge-danger">NEW</span>
                        </a></li>

                    <li><a type="button" id="helpcenter">
                            <i class="fa fa-question-circle"></i>
                            <span>Help center</span>
                        </a></li>
                    <li class="header-menu">
                        <span>Games</span>
                    </li>
                    <li><a href="/tournaments/csgo/" class="transition">
                            <i class="fa"><img src="img/icons/csgo.png" height="18" style="padding-bottom: 4px"></i>
                            <span>CS:GO</span>
                        </a></li>

                    <li><a href="/tournaments/dota/" class="transition">
                            <i class="fa"><img src="img/icons/dota.png" height="18" style="padding-bottom: 4px"></i>
                            <span>Dota 2</span>
                            <span class="badge badge-pill badge-danger">1</span>
                        </a></li>

                    <li><a href="/tournaments/pubg/">
                            <i class="fa"><img src="img/icons/pubg.png" height="18" style="padding-bottom: 4px"></i>
                            <span>PUBG</span>
                        </a></li>

                    <li><a href="/tournaments/teamfortress2/">
                            <i class="fa"><img src="img/icons/tf2.png" height="18" style="padding-bottom: 4px"></i>
                            <span>Team Fortress 2</span>
                        </a></li>
                    <!-- sidebar-menu  -->
            </div>
            <?php includeTemplate('layout/sidebar.php'); ?>
            </ul>
        </div>
        <div class="sidebar-footer">
            <a class="fs-11" href="index#">
                <i></i>
                <div><b>Powered by</b></div>
                <span>OMEN by HP</span> × <span>DreamHack</span> × <span>Paysafecard</span>
                <span>National Esports Leauges</span>
                <a href="index#">
                    <i></i>
                    <span></span>
                </a>
                <a href="index#">
                    <i></i>
                </a>
            </a>
        </div>
    </nav>
    <!-- sidebar-wrapper  -->
</div>
</div>
</div>


<!--===============================================================================================-->

<script src="/js/scripts.js"></script>
<script src="/js/main.js"></script>
</main>
<!-- page-content" -->
</div>
<!-- page-wrapper -->
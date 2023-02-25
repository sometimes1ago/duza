<?php if (!isset($_SESSION['user'])) : ?>
    <nav id="sidebar" class="sidebar-wrapper">
        <div class="sidebar-content">
            <div class="sidebar-header">
                <a href="/signin/"><button class="button-19" role="button">Login</button></a><br><br>
                <a href="/signup/"><button class="button-19" role="button">Register</button></a><br>
            </div>
            <!-- sidebar-menu  -->
            <div class="sidebar-header" style="margin-top: -7px">
                <div class="sidebar-brand mt-10">
                    <div id="close-sidebar ">
                        <h5>The home of competitive gaming.</h5>
                        <div><img class="mb-1" src="/img/icons/prize.png" style="width: 17px">
                            <b>Compete</b><br class="fs-8">Play free tournaments.
                        </div>
                    </div>
                </div>
                <div class="sidebar-brand">
                    <div style="display: block;">
                        <div><img class="mb-1" src="/img/icons/org.png" style="width: 16px">
                            <b>Organize</b><br class="fs-8">Run leagues and tournaments.
                        </div>
                    </div>
                </div>
                <div class="sidebar-brand">
                    <div style="display: block;">
                        <div><img class="mb-1" src="/img/icons/soc.png" style="width: 16px">
                            <b>Socialize</b><br class="fs-8">Find teams &amp; join communities.
                        </div>
                    </div>
                </div>
                <div class="sidebar-brand">
                    <div style="display: block;">
                        <div><img class="mb-1" src="/img/icons/mone.png" style="width: 16px">
                            <b>Monetize</b><br class="fs-8">Grow and monetize your community.
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- sidebar-content  -->
        <div class="sidebar-footer" style="height: 35px">
        </div>
        <!-- page-content" -->
    </nav>
<?php else : ?>
    <nav id="sidebar" class="sidebar-wrapper">
        <div class="sidebar-content">
            <div class="sidebar-header">
                <div class="user-pic">
                    <img class="img-responsive img-rounded" src="https://cdn.shopify.com/s/files/1/0250/9003/1694/files/tbd-up_website_1024x1024_2d06ae2c-9705-4821-84da-5ac425e8254f.png?v=1613878079" alt="User picture">
                </div>
                <a href="/player/profile/" class="user-info">
                    <span class="user-name"><?= $_SESSION['user']->getLogin(); ?></span>
                    <span class="user-status">
                        <i class="fa fa-circle"></i>Online
                    </span>
                </a>
            </div>
            <div class="sidebar-menu">
                <ul>
                    <li class="header-menu">
                        <span>YOUR ACTIVITIES</span>
                    </li>
                    <li>
                        <a href="/player/profile">
                            <i class="fa fa-user-circle"></i>
                            <span>Profile</span>
                        </a>
                    </li>
                    <li>
                        <a href="/player/teams">
                            <i class="fa fa-users"></i>
                            <span>Teams</span>
                        </a>
                    </li>
                    <li class="header-menu">
                        <span>Settings</span>
                    </li>
                    <li>
                        <a href="/player/settings/">
                            <i class="fa fa-cog"></i>
                            <span>Settings</span>
                            <span class="badge badge-pill badge-primary">Beta</span>
                        </a>
                    </li>
                    <li>
                        <a href="/player/privacy/">
                            <i class="fa fa-book"></i>
                            <span>Privacy</span>
                        </a>
                    </li>

                    <li>
                        <a href="/logout.php">
                            <i class="fa fa-power-off"></i>
                            <span>Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- sidebar-menu  -->
            <div class="sidebar-header" style="margin-top: -7px">
                <div class="sidebar-brand mt-10">
                    <div id="close-sidebar ">
                        <h5>The home of competitive gaming.</h5>
                        <div><img class="mb-1" src="/img/icons/prize.png" style="width: 17px">
                            <b>Compete</b><br class="fs-8">Play free tournaments.
                        </div>
                    </div>
                </div>
                <div class="sidebar-brand">
                    <div style="display: block;">
                        <div><img class="mb-1" src="/img/icons/org.png" style="width: 16px">
                            <b>Organize</b><br class="fs-8">Run leagues and tournaments.
                        </div>
                    </div>
                </div>
                <div class="sidebar-brand">
                    <div style="display: block;">
                        <div><img class="mb-1" src="/img/icons/soc.png" style="width: 16px">
                            <b>Socialize</b><br class="fs-8">Find teams &amp; join communities.
                        </div>
                    </div>
                </div>
                <div class="sidebar-brand">
                    <div style="display: block;">
                        <div><img class="mb-1" src="/img/icons/mone.png" style="width: 16px">
                            <b>Monetize</b><br class="fs-8">Grow and monetize your community.
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- sidebar-content  -->
        <div class="sidebar-footer" style="height: 35px">
        </div>
        <!-- page-content" -->
    </nav>
<?php endif; ?>
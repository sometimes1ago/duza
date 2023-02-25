<?php

require $_SERVER['DOCUMENT_ROOT'] . '/autoloader.php';

if (!isset($_SESSION['user'])) {
    header('Location: /signin/');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php includeTemplate('layout/header.php', ['title' => 'Profile']); ?>
    <style>
        .rotate {
            animation: animateGears 3.5s linear infinite;
        }

        .ccw {
            animation-direction: reverse;
        }

        @keyframes animateGears {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>
    <style>
        .button,
        button {
            display: block;
            color: #3d4f66;
            text-align: center;
            text-transform: uppercase;
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            cursor: pointer;
            border: 2px solid #cef290;
            background-color: #cef290;
            font-family: inherit;
            border-radius: 3px;
            -webkit-transition: all .3s;
            transition: all .3s
        }

        .button:hover,
        button:hover {
            background-color: #e3ffb2
        }

        .button.wide,
        button.wide {
            width: 200px
        }

        .button.full-width,
        button.full-width {
            width: 100%
        }

        .button.grey,
        button.grey {
            background-color: #2d3a4d;
            border: 1px solid rgba(122, 153, 172, .07);
            color: #cef290
        }

        .button.grey:hover,
        button.grey:hover {
            background-color: #7a99ac
        }

        .button.orange,
        button.orange {
            background-color: #ff7314;
            border: 2px solid #ff7314;
            color: #3d4f66
        }

        .button.orange:hover,
        button.orange:hover {
            background-color: #ff7532
        }

        .button.disabled,
        button.disabled {
            background-color: #2d3a4d !important;
            border-color: #2d3a4d !important;
            cursor: default;
            color: #253040 !important
        }

        .button.large,
        button.large {
            padding: 22px 40px;
            font-size: 30px;
            font-weight: 500;
            border-width: 7px;
            border-style: none;
            height: 80px;
            line-height: 36px
        }

        .button.large.search,
        button.large.search {
            padding-left: 60px;
            background-position: 18px
        }

        .button.medium,
        button.medium {
            padding: 12px 32px;
            font-size: 25px;
            font-family: Rajdhani, sans-serif;
            line-height: 41px;
            border-width: 2px;
            border-style: none;
            height: 64px
        }

        .button.medium.search,
        button.medium.search {
            padding-left: 50px;
            background-position: 10px
        }

        .button.small,
        button.small {
            padding: 0 25px;
            font-family: Rajdhani, sans-serif;
            height: 40px;
            font-weight: 700;
            line-height: 40px;
            font-size: 17px
        }

        .button.small.search,
        button.small.search {
            padding-left: 60px;
            background-position: 20px
        }

        .button.tiny,
        button.tiny {
            padding: 2px 18px;
            line-height: 37px;
            font-size: 17px;
            display: inline;
            border-width: 2px
        }

        button.anchor {
            display: inline;
            text-align: left;
            text-transform: none;
            box-sizing: content-box;
            border-radius: 0;
            -webkit-transition: none;
            transition: none;
            border: none;
            margin: 0;
            padding: 0;
            width: auto;
            overflow: visible;
            background: 0 0;
            font: inherit;
            line-height: normal;
            -webkit-font-smoothing: inherit;
            -moz-osx-font-smoothing: inherit;
            -webkit-appearance: none
        }
    </style>
</head>

<body style="background-image: url('/img/profileback.png'); background-repeat: no-repeat; background-position: top;">
    <!-- Page Content -->
    <div class="limiter">
        <div">
            <!-- style="background-image: url('../img/profileback.png'); background-repeat: no-repeat; background-position: top;" -->
            <div class="container text-center">
                <img src="https://i.ibb.co/rcJ1mMZ/Desolator-icon.png" style="width: 150px; margin-top: 70px;border-radius: 15px;">
                <span class="login100-form-title"><b class="user-name"></b></span>
                <h6><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0e/Ski_trail_rating_symbol-green_circle.svg/600px-Ski_trail_rating_symbol-green_circle.svg.png" style="width: 15px;">Active now. Registered less than a week ago.</h6>
                <div style="margin-top: 68px; min-width: 1000px">
                    <div class="stats">
                        <div class="prof">
                            <b>0</b><br>Played
                        </div>
                        <div class="prof">
                            <b>0</b><br>Winrate
                        </div>
                        <div class="prof">
                            <b>0</b><br>Reputation
                        </div>
                    </div>
                    <div class="container" style="margin-top: 120px;">
                        <h4 class="my-4" style="border-radius: 8px 8px; padding: 13px; background-color: #2f3643; background-image: url('../img/liner.png'); text-align: center;">
                            Main Information</h4>
                    </div>
                    <div class="stats" style="margin-top: 20px">
                        <div class="prof">
                            <div class="game py-3">
                                <h4 style="color: #ffbf4f">Your game accounts:</h4>
                                <img src="/assets/images/dota2.svg" alt="">
                                <img src="/assets/images/csgo.svg" style="width: 32px;height: 27px;" alt="">
                            </div>
                            <?php if (isset($_SESSION['user'])) : ?>
                                <a href="https://login.duza-gaming.com/" class="show-login-window button float-right grey tiny mt10 mr15" style="height:40px;line-height:35px;width: 90%;border: 1px solid #cef290;margin-right: 15px;" style="display: flex;position: absolute;justify-content: flex-end;top: 50%;width: 20px;transform: translateY(-51%);text-align: center;">

                                    <svg width="92" height="112" viewBox="0 0 61 52" xmlns="http://www.w3.org/2000/svg" style="margin-top: -14px;margin-right: 17px;">
                                        <defs>
                                            <path transform='translate(-12,-12)' id=gear d="M19.4298 12.98C19.4698 12.66 19.4998 12.34 19.4998 12C19.4998 11.66 19.4698 11.34 19.4298 11.02L21.5398
                                          9.37C21.7298 9.22 21.7798 8.95 21.6598 8.73L19.6598 5.27C19.5698 5.11 19.3998 5.02 19.2198 5.02C19.1598
                                          5.02 19.0998 5.03 19.0498 5.05L16.5598 6.05C16.0398 5.65 15.4798 5.32 14.8698 5.07L14.4898 2.42C14.4598
                                          2.18 14.2498 2 13.9998 2H9.99984C9.74984 2 9.53984 2.18 9.50984 2.42L9.12984 5.07C8.51984 5.32 7.95984
                                          5.66 7.43984 6.05L4.94984 5.05C4.88984 5.03 4.82984 5.02 4.76984 5.02C4.59984 5.02 4.42984 5.11 4.33984
                                          5.27L2.33984 8.73C2.20984 8.95 2.26984 9.22 2.45984 9.37L4.56984 11.02C4.52984 11.34 4.49984 11.67
                                          4.49984 12C4.49984 12.33 4.52984 12.66 4.56984 12.98L2.45984 14.63C2.26984 14.78 2.21984 15.05 2.33984
                                          15.27L4.33984 18.73C4.42984 18.89 4.59984 18.98 4.77984 18.98C4.83984 18.98 4.89984 18.97 4.94984
                                          18.95L7.43984 17.95C7.95984 18.35 8.51984 18.68 9.12984 18.93L9.50984 21.58C9.53984 21.82 9.74984
                                          22 9.99984 22H13.9998C14.2498 22 14.4598 21.82 14.4898 21.58L14.8698 18.93C15.4798 18.68 16.0398
                                          18.34 16.5598 17.95L19.0498 18.95C19.1098 18.97 19.1698 18.98 19.2298 18.98C19.3998 18.98 19.5698
                                          18.89 19.6598 18.73L21.6598 15.27C21.7798 15.05 21.7298 14.78 21.5398 14.63L19.4298 12.98ZM17.4498
                                          11.27C17.4898 11.58 17.4998 11.79 17.4998 12C17.4998 12.21 17.4798 12.43 17.4498 12.73L17.3098
                                          13.86L18.1998 14.56L19.2798 15.4L18.5798 16.61L17.3098 16.1L16.2698 15.68L15.3698 16.36C14.9398
                                          16.68 14.5298 16.92 14.1198 17.09L13.0598 17.52L12.8998 18.65L12.6998 20H11.2998L11.1098 18.65L10.9498
                                          17.52L9.88984 17.09C9.45984 16.91 9.05984 16.68 8.65984 16.38L7.74984 15.68L6.68984 16.11L5.41984
                                          16.62L4.71984 15.41L5.79984 14.57L6.68984 13.87L6.54984 12.74C6.51984 12.43 6.49984 12.2 6.49984
                                          12C6.49984 11.8 6.51984 11.57 6.54984 11.27L6.68984 10.14L5.79984 9.44L4.71984 8.6L5.41984 7.39L6.68984
                                          7.9L7.72984 8.32L8.62984 7.64C9.05984 7.32 9.46984 7.08 9.87984 6.91L10.9398 6.48L11.0998 5.35L11.2998
                                          4H12.6898L12.8798 5.35L13.0398 6.48L14.0998 6.91C14.5298 7.09 14.9298 7.32 15.3298 7.62L16.2398
                                          8.32L17.2998 7.89L18.5698 7.38L19.2698 8.59L18.1998 9.44L17.3098 10.14L17.4498 11.27ZM11.9998 8C9.78984
                                          8 7.99984 9.79 7.99984 12C7.99984 14.21 9.78984 16 11.9998 16C14.2098 16 15.9998 14.21 15.9998 12C15.9998
                                          9.79 14.2098 8 11.9998 8ZM11.9998 14C10.8998 14 9.99984 13.1 9.99984 12C9.99984 10.9 10.8998 10 11.9998
                                          10C13.0998 10 13.9998 10.9 13.9998 12C13.9998 13.1 13.0998 14 11.9998 14Z" fill="#ABD18B" />
                                        </defs>
                                        <g transform='translate(10,10)'>
                                            <g class="rotate">
                                                <use href="#gear" />
                                            </g>
                                        </g>
                                        <g transform='translate(19,31)'>
                                            <g class="rotate">
                                                <use href="#gear" />
                                            </g>
                                        </g>
                                        <g transform='translate(25,16)'>
                                            <g class="rotate ccw">
                                                <use href="#gear" />
                                            </g>
                                        </g>
                                        <g transform='translate(40,10)'>
                                            <g class="rotate">
                                                <use href="#gear" />
                                            </g>
                                        </g>
                                    </svg>
                                </a>


                            <?php endif; ?>

                            <div <?php if (isset($_SESSION['user'])) : ?>style="display: none;" <?php endif; ?>>

                                <div class="show-login-window button float-right grey tiny mt10 mr15" style="height:40px;line-height:35px;width: 90%;border: 1px solid #ef4336;text-align: -webkit-right;" style="display: flex;position: absolute;justify-content: flex-end;top: 50%;width: 20px;transform: translateY(-51%);text-align: center;">

                                    <a href="/player/profile?action=login" style="    position: relative; top: -15px; left: -50px;">

                                        <svg width="92" height="112" viewBox="0 0 61 52" xmlns="http://www.w3.org/2000/svg">
                                            <defs>
                                                <path transform='translate(-12,-12)' id=gear d="M19.4298 12.98C19.4698 12.66 19.4998 12.34 19.4998 12C19.4998 11.66 19.4698 11.34 19.4298 11.02L21.5398
                                          9.37C21.7298 9.22 21.7798 8.95 21.6598 8.73L19.6598 5.27C19.5698 5.11 19.3998 5.02 19.2198 5.02C19.1598
                                          5.02 19.0998 5.03 19.0498 5.05L16.5598 6.05C16.0398 5.65 15.4798 5.32 14.8698 5.07L14.4898 2.42C14.4598
                                          2.18 14.2498 2 13.9998 2H9.99984C9.74984 2 9.53984 2.18 9.50984 2.42L9.12984 5.07C8.51984 5.32 7.95984
                                          5.66 7.43984 6.05L4.94984 5.05C4.88984 5.03 4.82984 5.02 4.76984 5.02C4.59984 5.02 4.42984 5.11 4.33984
                                          5.27L2.33984 8.73C2.20984 8.95 2.26984 9.22 2.45984 9.37L4.56984 11.02C4.52984 11.34 4.49984 11.67
                                          4.49984 12C4.49984 12.33 4.52984 12.66 4.56984 12.98L2.45984 14.63C2.26984 14.78 2.21984 15.05 2.33984
                                          15.27L4.33984 18.73C4.42984 18.89 4.59984 18.98 4.77984 18.98C4.83984 18.98 4.89984 18.97 4.94984
                                          18.95L7.43984 17.95C7.95984 18.35 8.51984 18.68 9.12984 18.93L9.50984 21.58C9.53984 21.82 9.74984
                                          22 9.99984 22H13.9998C14.2498 22 14.4598 21.82 14.4898 21.58L14.8698 18.93C15.4798 18.68 16.0398
                                          18.34 16.5598 17.95L19.0498 18.95C19.1098 18.97 19.1698 18.98 19.2298 18.98C19.3998 18.98 19.5698
                                          18.89 19.6598 18.73L21.6598 15.27C21.7798 15.05 21.7298 14.78 21.5398 14.63L19.4298 12.98ZM17.4498
                                          11.27C17.4898 11.58 17.4998 11.79 17.4998 12C17.4998 12.21 17.4798 12.43 17.4498 12.73L17.3098
                                          13.86L18.1998 14.56L19.2798 15.4L18.5798 16.61L17.3098 16.1L16.2698 15.68L15.3698 16.36C14.9398
                                          16.68 14.5298 16.92 14.1198 17.09L13.0598 17.52L12.8998 18.65L12.6998 20H11.2998L11.1098 18.65L10.9498
                                          17.52L9.88984 17.09C9.45984 16.91 9.05984 16.68 8.65984 16.38L7.74984 15.68L6.68984 16.11L5.41984
                                          16.62L4.71984 15.41L5.79984 14.57L6.68984 13.87L6.54984 12.74C6.51984 12.43 6.49984 12.2 6.49984
                                          12C6.49984 11.8 6.51984 11.57 6.54984 11.27L6.68984 10.14L5.79984 9.44L4.71984 8.6L5.41984 7.39L6.68984
                                          7.9L7.72984 8.32L8.62984 7.64C9.05984 7.32 9.46984 7.08 9.87984 6.91L10.9398 6.48L11.0998 5.35L11.2998
                                          4H12.6898L12.8798 5.35L13.0398 6.48L14.0998 6.91C14.5298 7.09 14.9298 7.32 15.3298 7.62L16.2398
                                          8.32L17.2998 7.89L18.5698 7.38L19.2698 8.59L18.1998 9.44L17.3098 10.14L17.4498 11.27ZM11.9998 8C9.78984
                                          8 7.99984 9.79 7.99984 12C7.99984 14.21 9.78984 16 11.9998 16C14.2098 16 15.9998 14.21 15.9998 12C15.9998
                                          9.79 14.2098 8 11.9998 8ZM11.9998 14C10.8998 14 9.99984 13.1 9.99984 12C9.99984 10.9 10.8998 10 11.9998
                                          10C13.0998 10 13.9998 10.9 13.9998 12C13.9998 13.1 13.0998 14 11.9998 14Z" fill="#f44336" />
                                            </defs>
                                            <g transform='translate(10,10)'>
                                                <g class="rotate">
                                                    <use href="#gear" />
                                                </g>
                                            </g>
                                            <g transform='translate(19,31)'>
                                                <g class="rotate">
                                                    <use href="#gear" />
                                                </g>
                                            </g>
                                            <g transform='translate(25,16)'>
                                                <g class="rotate ccw">
                                                    <use href="#gear" />
                                                </g>
                                            </g>
                                            <g transform='translate(40,10)'>
                                                <g class="rotate">
                                                    <use href="#gear" />
                                                </g>
                                            </g>
                                        </svg>
                                    </a>

                                </div>
                            </div>

                            </p>
                        </div>
                        <div class="prof">
                            <h4 style="color: #ffbf4f">About</h4>
                            <h6>Preferred communication languages</h6>English and Russian
                        </div>
                        <div class="prof">
                            <h4 style="color: #ffbf4f">Information</h4>
                            <h6>General info</h6>
                            <b class="user-name"></b>
                            has not added any information yet.
                        </div>
                    </div>
                    <div class="container" style="margin-top: 30px;">
                        <h4 class="my-4" style="border-radius: 8px 8px; padding: 13px; background-color: #2f3643; background-image: url('../img/liner.png'); text-align: center;">
                            Match history</h4>
                    </div>
                    <div class="stats">
                        <div class="prof">
                            You haven't played any games yet.
                        </div>
                    </div>
                    <!-- Bootstrap core JavaScript -->
                    <script src="/vendor/jquery/jquery.min.js"></script>
                    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
                </div>
            </div>
            <div class="page-wrapper chiller-theme toggled" style="margin-top: -1730px">
                <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
                    <i class="fas fa-bars"></i>
                </a>
                <?php includeTemplate('/layout/sidebar.php') ?>
            </div>
            <!-- sidebar-content  -->
            <div class="sidebar-footer" style="height: 35px">
            </div>
            </main>
            <!-- page-content" -->
    </div>
    <!-- page-wrapper -->
    <script>
        const svg = document.querySelector('svg');
        const wheels = svg.querySelectorAll('use');

        let angle = 0;
        const speed = 1;
        const centers = [
            [55, 135],
            [127, 67],
            [216, 90]
        ];
        const directions = [1, -1, 1];
        const scales = [1, 1.2, 0.8];

        animate();

        function animate() {
            wheels.forEach((w, i) => {
                w.setAttribute('transform', `translate(${centers[i][0]} ${centers[i][1]}) rotate(${directions[i]*angle},0,0) scale(${scales[i]} ${scales[i]})`);
            })

            angle = angle % 360 + speed;
            requestAnimationFrame(animate);
        }
    </script>
    <!--===============================================================================================-->
    <script src="/js/main.js"></script>
    <div class="page-wrapper chiller-theme toggled">
        <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
            <i class="fas fa-bars"></i>
        </a>
        <?php includeTemplate('layout/leftbar.php'); ?>
        <!-- sidebar-wrapper  -->
    </div>
    </div>
    </div>
    <!--     <div id="success" class="popup">
        <div class="modal-dialog">
            <div tabindex="0" class="modal-content ng-star-inserted">
                <div class="modal-body" tabindex="0">
                    <div class="slimscroll-wrapper" style="position: relative; overflow: hidden; display: flex; margin: 0px; width: 100%; padding-right: 0px;">
                        <div class="modal-body-content" style="overflow: hidden; position: relative; display: block; flex: 1 1 0%;">
                            <modal-body _aftc_ascapp-c183=""><br>
                                <div _aftc_ascapp-c183="" class="info" style="padding: 0px 15px 1px;">
                                    <h4 style="font-family: monospace;color: black;">Вы успешно cвязали свой профиль Steam</h4><br>
                                </div>
                                <div _aftc_ascapp-c183="" class="price-wrapper">
                                 <a href="/user/profile" _aftc_ascapp-c184="" class="btn subscribe-button ng-star-inserted" style="background: linear-gradient( #4dca98, #355d4d);
                                    border-radius: 4px;
                                    border: 0;
                                    font-family: Korolev;
                                    font-size: 16px;
                                    line-height: 16px;
                                    letter-spacing: 0.5px;
                                    color: #fff;
                                    width: 184px;
                                    padding: 12px 0;
                                    cursor: pointer;font-family: system-ui;">Принять</button></a>
                                </div>
                            </modal-body>
                        </div>
                        <div class="slimscroll-grid" style="position: absolute; top: 0px; right: 0px; width: 6px; height: 100%; background: transparent; opacity: 1; display: none; cursor: pointer; z-index: 99; border-radius: 10px; margin: 0px;"></div>
                        <div class="slimscroll-bar" style="position: absolute; top: 0px; right: 0px; width: 6px; background: rgb(70, 166, 255); opacity: 1; display: none; cursor: pointer; z-index: 100; border-radius: 7px; margin: 0px 5px; height: 306px;"></div>
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div> -->
    <style type="text/css">
        .popup {
            visibility: hidden;
            opacity: 0;
            position: fixed;
            width: 45%;
            height: 0%;
            top: 30%;
            left: 25%;
            transition: all 0.8s ease 0s;
            z-index: 1;
        }

        .popup__area {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0%;
            z-index: 4;
        }

        .popup:target {
            opacity: 1;
            visibility: visible;
        }

        .popup__body {
            display: flex;
            align-content: center;
            justify-content: center;
            color: rgb(139, 0, 255);
            border: 10px yellow;
            padding: 10px;
            z-index: 1;
        }

        .popup__content {
            color: rgb(139, 0, 255);
            background-color: rgba(139, 0, 255, 0.8);
            color: black;
            max-width: 800px;
            position: relative;
        }

        .popup__title {
            font-size: 20px;
            margin: 0px 0px 1em 0px;
            color: yellow;
            padding: 10x
        }

        .popup__close {
            color: red;
            position: absolute;
            right: 3%;
            top: 10px;
            font-size: 24;
            text-decoration: none;
        }

        .popup__text {
            color: white;
            padding: 5px;
        }
    </style>
    <!--===============================================================================================-->
    <script>
        var modal = document.getElementById("my_modal");
        var btn = document.getElementById("btn_modal_window");
        var span = document.getElementsByClassName("close_modal_window")[0];

        btn.onclick = function() {
            modal.style.display = "block";
        }

        span.onclick = function() {
            modal.style.display = "none";
        }

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
    <script src="/js/main.js"></script>
    <script src="/js/scripts.js"></script>
    </main>
    <!-- page-content" -->
    </div>
    <!-- page-wrapper -->
    <!-- Navigation -->
</body>

</html>
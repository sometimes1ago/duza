<?php

require $_SERVER['DOCUMENT_ROOT'] . '/autoloader.php';

if (isset($_SESSION['user'])) {
    header('Location: /player/profile/');
}

if (isset($_POST['submit'])) {
    $login = htmlspecialchars(trim($_POST['login']));
    $email = htmlspecialchars(trim($_POST['email']));
    $password = htmlspecialchars(trim($_POST['password']));

    if (!empty($login)) {
        if (!empty($email)) {
            if (!empty($password)) {
                $db = Database::getInstance();

                $db->query(
                    "INSERT INTO `users`(`email`, `login`, `password`, `role`) VALUES(:email, :login, :password, :role);",
                    [
                        'email' => $email,
                        'login' => $login,
                        'password' => hash('sha256', $password),
                        'role' => 'user'
                    ]
                );

                header('Location: /signin/');
            } else {
                Errors::newError('Password cannot be empty!');
            }
        } else {
            Errors::newError('Email cannot be empty!');
        }
    } else {
        Errors::newError('Login cannot be empty!');
    }
}

?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <!-- meta tag -->
    <meta charset="utf-8" />
    <title>Sign Up</title>
    <meta name="description" content="" />
    <!-- responsive tag -->
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- favicon -->
    <link rel="apple-touch-icon" href="favicon.ico" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/fav.png" />
    <!-- Bootstrap v4.4.1 css -->
    <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css" />
    <!-- animate css -->
    <link rel="stylesheet" type="text/css" href="/assets/css/animate.css" />
    <!-- magnific css -->
    <link rel="stylesheet" type="text/css" href="/assets/css/magnific-popup.css" />
    <!-- owl.carousel css -->
    <link rel="stylesheet" type="text/css" href="/assets/css/owl.carousel.css" />
    <!-- off canvas css -->
    <link rel="stylesheet" type="text/css" href="/assets/css/off-canvas.css" />
    <!-- flaticon css  -->
    <link rel="stylesheet" type="text/css" href="/assets/css/ico-moon-fonts.css" />
    <!-- font awesome icon css -->
    <link rel="stylesheet" type="text/css" href="/assets/css/all.min.css">
    <!-- spacing css -->
    <link rel="stylesheet" type="text/css" href="/assets/css/sc-spacing.css" />
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css" />
    <!-- responsive css -->
    <link rel="stylesheet" type="text/css" href="/assets/css/responsive.css" />
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="/assets/js/simple-notify.min.js"></script>
    <style>
        .select_wrap {
            margin: 15px auto;
            position: relative;
            user-select:
                none;
        }

        .select_wrap .default_option {
            background: #1a1b2f;
            border-radius: 5px;
            position: relative;
            cursor: pointer;
            box-shadow: rgba(0, 0, 0, 0.17) 0px -23px 25px 0px inset, rgba(0, 0, 0, 0.15) 0px -36px 30px 0px inset, rgba(0, 0, 0, 0.1) 0px -79px 40px 0px inset, rgba(0, 0, 0, 0.06) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;
        }

        .select_wrap .default_option li {
            padding: 10px 20px;
        }

        .select_wrap .default_option:before {
            position: absolute;
            top: 18px;
            right: 18px;
            width: 6px;
            height: 6px;
            border: 2px solid;
            border-color: transparent transparent #555 #555;
            transform: rotate(-45deg);
        }

        .select_wrap .select_ul {
            position: absolute;
            top:
                55px;
            left: 0;
            width: 100%;
            background: #0c0e24;
            border-radius: 5px;
            display:
                none;
            z-index: 11;
            box-shadow: rgb(0 0 0 / 17%) 0px -23px 25px 0px inset, rgb(0 0 0 / 15%) 0px -36px 30px 0px inset, rgb(0 0 0 / 10%) 0px -79px 40px 0px inset,
                rgb(0 0 0 / 6%) 0px 2px 1px, rgb(0 0 0 / 9%) 0px 4px 2px, rgb(0 0 0 / 9%) 0px 8px 4px, rgb(0 0 0 / 9%) 0px 16px 8px, rgb(0 0 0 / 9%) 0px 32px 16px;
        }

        .select_wrap .select_ul li {
            padding: 0px 20px;
            cursor: pointer;
        }

        .select_wrap .select_ul li:first-child:hover {
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }

        .select_wrap .select_ul li:last-child:hover {
            border-bottom-left-radius: 5px;
            border-bottom-right-radius: 5px;
        }

        .select_wrap .select_ul li:hover {
            background: #090a1a;
        }

        .select_wrap .option {
            display:
                flex;
        }

        .select_wrap .option .icon {
            background:
                url(https://i.ibb.co/6ZqNjbS/Pip-carry.webp) no-repeat 0 0;
            width: 32px;
            height:
                32px;
            margin-right: 15px;
        }

        .select_wrap .option.pizza .icon {
            background-position: 0 0;
        }

        .select_wrap .option.burger .icon {
            background-position: 0 -35px;
        }

        .select_wrap .option.ice .icon {
            background-position: 0 -72px;
        }

        .select_wrap .option.fries .icon {
            background-position: 0 -111px;
            width: 25px;
        }

        .select_wrap.active .select_ul {
            display: block;
        }

        .select_wrap.active .default_option:before {
            top: 25px;
            transform: rotate(-225deg);
        }
    </style>
</head>

<body>

    <!--Preloader area start here-->
    <!--         <div class="loader_first">
            <div class="circular-spinner"></div>
        </div> -->
    <!--Preloader area End here-->


    <!-- account section start -->
    <div class="account__area">
        <div class="account-bg"></div>
        <div class="container">
            <div class="account__content">
                <div class="account__form">
                    <div class="account__title mb-29">
                        <h2>Create Account</h2>
                        <h3>Inter your name, valid email address and password to register your account</h3>
                    </div>
                    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                        <?php if (Errors::hasAny()) : ?>
                            <div class="alert alert-danger" role="alert">
                                <ul>
                                    <?php foreach (Errors::getAll() as $error) : ?>
                                        <li><?= $error->getMessage() ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                        <div class="input__group mb-23">
                            <label>Nickname</label>
                            <input type="text" name="login" id="f-name" placeholder="Enter your name">
                        </div>
                        <div class="input__group mb-23">
                            <label>Email address</label>
                            <input type="email" name="email" id="email" placeholder="Enter your email address">
                        </div>
                        <div class="input__group mb-23">
                            <label>Password</label>
                            <input type="password" name="password" id="pass" placeholder="Enter your password">
                        </div>

                        <div class="input__group mb-23">
                            <label>Choose a role</label>
                            <div class="select_wrap">
                                <ul class="default_option">
                                    <li>
                                        <div class="option pizza">
                                            <div style="background: url(https://i.ibb.co/wRJdv8F/free-icon-forward-6998832.png) no-repeat 0 0;width: 32px;height: 32px;margin-right: 15px;"></div>
                                            <p>Choose a role</p>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="select_ul">
                                    <li>
                                        <div class="option pizza">
                                            <div style="background: url(https://i.ibb.co/1KpqdH4/Pip-disabler.webp) no-repeat 0 0;width: 32px;height: 32px;margin-right: 15px;"></div>
                                            <p>Disable </p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="option pizza">
                                            <div style="background: url(https://i.ibb.co/vhCpvQN/Pip-carry.webp) no-repeat 0 0;width: 32px;height: 32px;margin-right: 15px;"></div>
                                            <p>Carry </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="option burger">
                                            <div style="background: url(https://i.ibb.co/mC6FcXH/Pip-initiator.webp) no-repeat 0 0;width: 32px;height: 32px;margin-right: 15px;"></div>
                                            <p>Disable</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="option ice">
                                            <div style="background: url(https://i.ibb.co/HxpYVvy/Pip-jungler.webp) no-repeat 0 0;width: 32px;height: 32px;margin-right: 15px;"></div>
                                            <p>Initiation</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="option fries">
                                            <div style="background: url(https://i.ibb.co/sj4Cs53/Pip-roamer.webp) no-repeat 0 0;width: 32px;height: 32px;margin-right: 15px;"></div>
                                            <p>Support</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="option fries">
                                            <div style="background: url(https://i.ibb.co/VwWymYR/Pip-tank.webp) no-repeat 0 0;width: 32px;height: 32px;margin-right: 15px;"></div>
                                            <p>Durable</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="item-text mb-28">
                            <input type="checkbox" name="accept" class="form-check-input" id="checkbox">
                            <label for="accept">
                                I accept the
                                <a href="#">Term of Conditions</a>
                                and
                                <a href="#">Privacy Policy </a>
                            </label>
                        </div>
                        <div class="item-button">
                            <button type="submit" name="submit" id="btn" class="theme-btn blue">
                                <span>Register Account</span>
                                <div class="hover-shape1"></div>
                                <div class="hover-shape2"></div>
                                <div class="hover-shape3"></div>
                                </a>
                        </div>
                    </form>
                    <div class="item-bottom mt-31">
                        <h4>
                            Already have an account ?
                            <a href="/signin/">Sign in now !</a>
                        </h4>
                    </div>
                </div>
                <div class="account-shadow"></div>
            </div>
        </div>
    </div>
    <!-- account section END -->
    <script>
        $(".default_option").click(function() {
            $(this).parent().toggleClass("active");
        })

        $(".select_ul li").click(function() {
            var currentele = $(this).html();
            $(".default_option li").html(currentele);
            $(this).parents(".select_wrap").removeClass("active");
        })
    </script>
    <script>
        /*$('#checkbox').click(function(){
            if ($(this).is(':checked')){
                $('#btn').removeAttr('disabled');
            } else {
                $('#btn').attr('disabled', 'disabled'); 
            }
        });*/

        function check() {
            if (!$('#checkbox').is(':checked')) {
                notifcheck();
                return false;
            }

            return true;
        }
    </script>

    <script>
        function notifcheck() {
            new Notify({
                status: 'error',
                title: 'It is necessary to agree with the rules',
                text: '',
                effect: 'fade',
                speed: 300,
                customClass: '',
                customIcon: '',
                showIcon: true,
                showCloseButton: true,
                autoclose: true,
                autotimeout: 3000,
                gap: 20,
                distance: 20,
                type: 1,
                position: 'left bottom',
                customWrapper: '',
            })
        }
    </script>

    <!-- modernizr js -->
    <script src="assets/js/modernizr-2.8.3.min.js"></script>
    <!-- jquery latest version -->
    <script src="assets/js/jquery.min.js"></script>
    <!-- Bootstrap v4.4.1 js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- popup.min js -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- imagesloaded.pkgd.min js -->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <!-- wow js -->
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!-- counter top js -->
    <script src="assets/js/waypoints.min.js"></script>
    <!-- owl.carousel js -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- plugins js -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/metamaskhandler.js"></script>
    <!-- main js -->

</body>

</html>
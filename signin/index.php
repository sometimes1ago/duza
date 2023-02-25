<?php

require $_SERVER['DOCUMENT_ROOT'] . '/autoloader.php';

if (isset($_SESSION['user'])) {
    header('Location: /player/profile/');
}

if (isset($_POST['submit'])) {

    $login = htmlspecialchars(trim($_POST['login']));
    $password = htmlspecialchars(trim($_POST['password']));

    if (!empty($login)) {
        if (!empty($password)) {
            if (array_key_exists('rememberMe', $_POST)) {
                Auth::loginWithCookies($login, $password);
                header('Location: /player/profile/');
            } else {
                if (Auth::login($login, $password)) {
                    header('Location: /player/profile/');
                } else {
                    Errors::newError('Login or password incorrect!');
                }
            }
        } else {
            Errors::newError('Password cannot be empty!');
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
    <title>Sign In</title>
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
</head>

<body>
    <!-- account section start -->
    <div class="account__area">
        <div class="account-bg"></div>
        <div class="container">
            <div class="account__content">
                <div class="account__form">
                    <div class="account__title mb-29">
                        <h2>log In</h2>
                        <h3>Inter your email address and password to get access your account</h3>
                    </div>
                    <?php if (Errors::hasAny()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <ul>
                                <?php foreach (Errors::getAll() as $error) : ?>
                                    <li><?= $error->getMessage() ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                        <div class="input__group mb-23">
                            <label>Your login</label>
                            <input type="text" name="login" placeholder="Enter your email address">

                        </div>
                        <div class="input__group mb-23">
                            <label>Your password</label>
                            <input type="password" name="password" id="pass" placeholder="Enter your password">
                        </div>
                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                            <div class="item-text mb-28">
                                <input type="checkbox" name="rememberMe" id="rememberMe" checked>
                                <label for="accept">Remember me</label>
                            </div>
                            <!-- <div class="item-text mb-28">
                                    <a href="forget-password.html">Forget Password ?</a>
                                </div> -->
                        </div>
                        <div class="item-button">
                            <button type="submit" name="submit" class="theme-btn blue" onclick="lsRememberMe()">
                                <span>Sign in</span>
                                <div class="hover-shape1"></div>
                                <div class="hover-shape2"></div>
                                <div class="hover-shape3"></div>
                                </a>
                        </div>
                    </form>
                    <div class="item-bottom mt-31">
                        <h4>
                            Don’t have an account ?
                            <a href="/signup/">Sign up now !</a>
                        </h4>
                    </div>
                </div>
                <div class="account-shadow"></div>
            </div>
        </div>
    </div>
    <!-- account section END -->
    <script>
        const rmCheck = document.getElementById("rememberMe"),
            emailInput = document.getElementById("email");

        if (localStorage.checkbox && localStorage.checkbox !== "") {
            rmCheck.setAttribute("checked", "checked");
            emailInput.value = localStorage.username;
        } else {
            rmCheck.removeAttribute("checked");
            emailInput.value = "";
        }

        function lsRememberMe() {
            if (rmCheck.checked && emailInput.value !== "") {
                localStorage.username = emailInput.value;
                localStorage.checkbox = rmCheck.value;
            } else {
                localStorage.username = "";
                localStorage.checkbox = "";
            }
        }
    </script>
    <!-- Meta Mask Connect -->
    <script src="assets/js/web3.min.js"></script>
    <script src="assets/js/metamask.js"></script>

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
    <script src="assets/js/main.js"></script>
</body>

</html>
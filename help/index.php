<?php

require $_SERVER['DOCUMENT_ROOT'] . '/autoloader.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php includeTemplate('layout/header.php', ['title' => 'Help Center']); ?>
</head>

<body>
    <!-- Page Content -->
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form class="login100-form validate-form" action="<?= $_SERVER['PHP_SELF'] ?>" method="POST" style="margin-left:250px; margin-top: -130px">
                    <span class="login100-form-title">
                        Ask your question
                    </span>
                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100" type="text" class="form-control" name="login" id="login" placeholder="Name">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user-circle" aria-hidden="true"></i>
                        </span>
                    </div>


                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100" type="text" class="form-control" name="_replyto" id="email" placeholder="Email">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="col-12">
                        <select name="category" id="category">
                            <option value="" style="font-color: #262626"> Select </option>
                            <option value="alpha">Profile</option>
                            <option value="beta">Tournaments</option>
                            <option value="gamma">Registration</option>
                            <option value="delta">Option delta</option>
                            <option value="epsilon">Account was hacked</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <textarea name="textarea" id="textarea" placeholder="Write here..." rows="6"></textarea>
                    </div>

                    <div class="container-login100-form-btn">

                        <button class="login100-form-btn" type="submit">Send</button>
                        <div id="myModal" class="modal">
                            <div class="modal-content-n">
                                <span class="close">&times;</span>
                                <span class="poppins">Your message has been sent.</span>
                            </div>
                        </div>

                </form>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/tilt/tilt.jquery.min.js"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
    <script src="script.js"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <div class="page-wrapper chiller-theme toggled" style="margin-top: -1730px">
        <a id="show-sidebar" class="btn btn-sm btn-dark" href="help.html#">
            <i class="fas fa-bars"></i>
        </a>
        <?php includeTemplate('layout/sidebar.php', ['user' => $_SESSION['user']]) ?>

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
        <a id="show-sidebar" class="btn btn-sm btn-dark" href="help.html#">
            <i class="fas fa-bars"></i>
        </a>
        <?php includeTemplate('layout/leftbar.php') ?>
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
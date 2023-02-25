<?php

require $_SERVER['DOCUMENT_ROOT'] . '/autoloader.php';

if (isset($_SESSION['user'])) {
    unset($_SESSION['user']);
    session_destroy();

    header('Location: /');
}

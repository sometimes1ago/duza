<?php

require $_SERVER['DOCUMENT_ROOT'] . '/autoloader.php';

if (isset($_SESSION['user'])) {

    Auth::logout();
    header('Location: /');
}

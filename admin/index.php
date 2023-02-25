<?php

require $_SERVER['DOCUMENT_ROOT'] . '/autoloader.php';

if (!isset($_SESSION['user'])) {
    header('Location: /');
}

if ($_SESSION['user']->getRole() !== 'admin') {
    header('Location: /');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php includeTemplate('layout/header.php', ['title' => 'Admin panel']); ?>
</head>

<body>

</body>

</html>
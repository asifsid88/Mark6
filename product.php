<?php
        $test = $_REQUEST["test"];
        if(!isset($test)) {
            echo 'Site is under construction';
            die();
        }
        ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('modules/header.php'); ?>
</head>
<body>
    <?php include('modules/menubar.php'); ?>
    <div id="mark6-body">
        <?php include('templates/productpage.php'); ?>
    </div>
    <?php include('modules/javascripts.php'); ?>
</body>
</html>

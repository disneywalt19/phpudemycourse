<?php
/**
 * Created by PhpStorm.
 * User: disney
 * Date: 2019-08-26
 * Time: 14:39
 */
$title = 'The cool web page ever';
$background = 'orange';

?>

<html>
<head>
    <title><?php echo $title; ?></title>
    <style>
        body
        {
            background-color: <?php echo $background; ?>
        }
    </style>
</head>
<body>
    <h1><?php echo $title; ?></h1>
</body>
</html>

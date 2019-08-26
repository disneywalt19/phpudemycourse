<?php
/**
 * Created by PhpStorm.
 * User: disney
 * Date: 2019-08-26
 * Time: 15:08
 */
// FUNCTION WITH OPTIONAL PARAMETERS
function joe($age = 29)
{
    echo 'Joe is ' . $age . ' years old<br>';
}

joe(20);
joe();

?>
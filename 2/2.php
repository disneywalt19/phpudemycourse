<?php
/**
 * Created by PhpStorm.
 * User: disney
 * Date: 2019-08-26
 * Time: 14:57
 */

// FUNCTION WITH PARAMETERS
function customName(string $name, int $age)
{
    echo $name . ' is a very nice person and has '. $age . ' years.<br>';
}

customName('Eduard', 25);
customName('John', 20);

?>
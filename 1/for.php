<?php
/**
 * Created by PhpStorm.
 * User: disney
 * Date: 2019-08-26
 * Time: 12:59
 */

// FOR STATEMENT
$randomNumber= rand(5, 20);


// LOOP
for ($i = 0; $i <= $randomNumber; $i++)
{
    //che
    if($i == 5 || $i == 10)
    {
        echo $i . '<br>';
    }

}

?>
<?php
/**
 * Created by PhpStorm.
 * User: disney
 * Date: 2019-08-26
 * Time: 15:13
 */

// FUNCTION WITH RETURN
function giveMeMoney()
{
    return rand(1, 10);
}



$money = giveMeMoney();

echo $money;


?>
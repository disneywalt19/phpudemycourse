<?php
/**
 * Created by PhpStorm.
 * User: disney
 * Date: 2019-08-26
 * Time: 13:06
 */

// FOREACH STATEMENT
$customers = array(
    'Tom' => 'Pizza',
    'Eddy' => 'Hummus',
    'John' => 'Cheese',
    'Dan' => 'Beer'
);

//LOOP
foreach ($customers as $customer => $dish)
{
    echo $customer . ' likes ' . $dish . '<br>';
}
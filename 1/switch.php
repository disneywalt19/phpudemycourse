<?php

// SWITCH STATEMENT
$randomNumber = rand(0, 4);

switch ($randomNumber)
{
    case 0:
        echo 'The case is 0';
        break;
    case 1:
        echo "The case is 1";
        break;
    case 2:
        echo 'The case is 2';
        break;
    default:
        echo 'Default case';
        break;
}



?>
<?php


// IF STATEMENT

$firstname = 'Tom';
$age = 21;
$lastname = 'Marry';



// CASE 1:

if ($firstname == 'Tom' && $age ==34)
{
    echo 'The name is Tom<br>';
}

//CASE 2:

if($age == 22 || $age ==21)
{
    echo 'The age is valid<br>';
}else
{
    echo 'The age is something else<br>';
}

//CASE 3:

if($lastname == 'Jenny')
{
    echo 'The name is Jenny';
}elseif($lastname == 'Danny<br>')
{
    echo 'The name is Danny<br>';
}else
{
    echo 'Not know name';
}

?>


<?php

// VARIABLES
$date = date("Y");  // date
$fruitname = "bananas";   //string
$organicstatus = true;  //boolean
$defaultprice = 12.99;         //double
$quantityunit = 'kg';   //string
$units = 230;           //integer
$fruit = "strawberry";
$countries = Array(     //tablica dwuwymiarowa
    'Panama' => 1.93,
    'Congo' => 3.29,
    'Peru' => 2.23
);

    echo 'During the year ' . $date . ' ' . $fruit . ' and ' . $fruitname . ' lower their price from ' . $defaultprice . ' per ' . $quantityunit . ' to ' . $countries['Congo'] . ' ' . $quantityunit;
?>
<?php

$a = filter_input(INPUT_GET, 'r');

if (!$a)
{
   include 'view/Shablon1.php';
}
else
{
    include 'view/Shablon2.php';
}








<?php

$a = filter_input(INPUT_GET, 'r');

if (!$a)
{
   include 'model/Articls_preview.php';
}
else
{
    require 'model/All_text_one_articl.php';
    
}
?>

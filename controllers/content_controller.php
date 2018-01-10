<?php
$a = filter_input(INPUT_GET, 'r');
if (!$a)
{
   include 'model/db_select_all.php';
}
else
{
    require 'model/full_text_articl.php';
    
}
?>

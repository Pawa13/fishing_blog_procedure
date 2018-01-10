<?php

require_once '/var/www/fishing_blog_procedure/classes/db_connect.php';
$query = "SELECT ID,Date,Categories,Articl_name,SUBSTRING(`Text`, 1, 200) FROM `Aticls`ORDER BY ID DESC LIMIT 5";
//$query = "SELECT * FROM `Aticls`";
$result = mysqli_query($link, $query); 
while ($row = mysqli_fetch_assoc($result))
{      //echo "<br>";
    foreach($row as $value)
        {
          //echo "<br>";        
         echo $value;
                  
          echo "<br>"; 
    }      
             $e = $row['ID'];
             //echo "<p><a href= http://fishing_blog_procedure/model/full_text_articl.php?r=$e>Читать далее</a></p>";
             echo "<p><a href= http://fishing_blog_procedure/index.php?r=$e>Читать далее...</a></p>";
              echo "<br>";
 }   
mysqli_close ($link);

  ?>

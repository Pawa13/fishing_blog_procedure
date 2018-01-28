<?php

include 'components/Db_connect.php';
$query = "SELECT ID,Date,Categories,Articl_name,SUBSTRING(`Text`, 1, 200) FROM `aticls`ORDER BY ID DESC LIMIT 5";

$result = mysqli_query($link, $query); 
while ($row = mysqli_fetch_assoc($result))
{      
    foreach($row as $value)
        {
         
         echo $value;
                  
          echo "<br>"; 
    }      
             $e = $row['ID'];
             
             echo "<p><a href= http://fishing_blog_procedure/index.php?r=$e>Читать далее...</a></p>";
              echo "<br>";
 }   
mysqli_close ($link);

  ?>

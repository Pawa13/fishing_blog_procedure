 <?php
$a = $_GET["r"];
require_once '/var/www/fishing_blog_procedure/components/Db_connect.php';
$query = "SELECT ID,Date,Articl_name,Text FROM `Aticls` Where `ID` = $a";
$result = mysqli_query($link, $query); 
while ($row = mysqli_fetch_assoc($result))
{     
    
          
    echo "<br>";
    foreach($row as $value)
        {
        echo $value;
         echo "<br>";
           echo "<br>";
             echo "<br>";
        }
           
    }  
    
?>
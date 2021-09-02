<html lang="lv">
<head>
        <meta charset="UTF-8">
<?php

include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$search_value=$_POST["search"];

$sql="select * from Galvena where Students like '%$search_value%'";

        $res=$conn->query($sql);

        while($row=$res->fetch_assoc()){
            
            $Klase = $row["Klase"];
            $Kopejas_Maksa = $row["Kopejas_Maksa"];
            
            
            ?><h1><?php echo $Klase . " - Klase <br> " . $Kopejas_Maksa . " - Stipendija" ?></h1><?php
        }   
   }
?>
</head>
</html>
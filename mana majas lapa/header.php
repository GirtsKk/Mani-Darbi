<?php
include 'db.php';

$sql = "SELECT * FROM header";
$header = $conn->query($sql);
if($header-> num_rows > 0){
echo "<ul>";
while($frow=$header->fetch_assoc()){
        $Name = $frow['Name'];
        $URL = $frow['URL'];
        $icon = $frow['icon'];

echo "<li><a href='$URL'><img src='$icon' alt='$Name' style= 'max-width:20px;'>". $Name ."</a></li>";

}
echo "</ul>";
}
?>
 
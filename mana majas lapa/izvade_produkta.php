<?php
include "db.php";
include 'header.php';

$sql = "SELECT * FROM Product";
$result = $conn-> query ($sql);

if ($result-> num_rows > 0) {
        while ($row = $result-> fetch_assoc()) {
        $Produkta_Nos = $row['Produkta_Nos'];
        $Produkta_Bilde = $row['Produkta_Bilde'];
        $ID = $row['ID'];
        ?>
        <?php echo "<a href='single_produkt.php?Product=" . $ID ."'>" ?>
        <h1><?php echo $Produkta_Nos ?></h1>
        <img src="<?php echo $Produkta_Bilde ?>" alt="<?php echo $Produkta_Nos ?>" width="300">
        <?php
        }
}else {
        echo "nav rezultātu";
}
$conn-> close();
?>

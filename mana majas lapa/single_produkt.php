<?php
if(isset($_GET['Product'])){
$Product = $_GET['Product'];
}
include 'db.php';

        $sql = "SELECT * FROM Product WHERE ID like $Product";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {

        while($row = $result->fetch_assoc()) {
        $Produkta_Nos = $row['Produkta_Nos'];
        $Produkta_Text = $row['Produkta_Text'];
        $Produkta_Bilde = $row['Produkta_Bilde'];
        $Produkta_Cena = $row['Produkta_Cena'];
        $Produkta_Skaits = $row['Produkta_Skaits'];
        $ID = $row['ID'];

        ?><h1><?php echo $Produkta_Nos ?></h1><?php
        ?><img src = "<?php echo $Produkta_Bilde ?>" alt="<?php echo $Produkta_Nos ?>" width="300"><?php
        ?><p><?php echo $Produkta_Text ?></p><?php
        ?><li><?php echo "Produkta Cena " .$Produkta_Cena. " eir" ?></li><?php
        ?><li><?php echo "Produkta Skaits " .$Produkta_Skaits ?></li><?php

        }
}
?>

<?php

$data = array(
        'ID' => $ID,
        'Produkta_Nos' => $Produkta_Nos,
        'Produkta_Cena' => $Produkta_Cena
 );
 
 echo "<a href='order.php?" . http_build_query($data)."'>Pirkt</a>" 
 ?>


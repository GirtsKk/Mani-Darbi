<?
include 'db.php';

if (isset($_POST['submit'])) {


        $Produkta_Nos = $_POST['Produkta_Nos'];
        $Produkta_Text = $_POST['Produkta_Text'];
        $Produkta_Bilde = $_POST['Produkta_Bilde'];
        $Produkta_Cena = $_POST['Produkta_Cena'];
        $Produkta_Skaits = $_POST['Produkta_Skaits'];


        $sql = "INSERT INTO Product (Produkta_Nos, Produkta_Text, Produkta_Bilde, Produkta_Cena, Produkta_Skaits) 
        VALUES ('$Produkta_Nos','$Produkta_Text','$Produkta_Bilde','$Produkta_Cena','$Produkta_Skaits')";

        if ($conn->query($sql) === TRUE) {
            echo "Dati pievienoti, dodieties uz sadaļu Produkti, lai redzētu pievienoto produktu";
        }else{
            echo "Neizdevās";
            mysqli_error($conn);
        }

    }



?>
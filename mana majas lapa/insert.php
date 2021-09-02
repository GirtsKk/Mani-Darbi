<?php   
        include 'db.php';
        
        $Students = $_POST["Students"];

        $sql = "INSERT INTO Galvena (Students)
        VALUES ('$Students')";

        if ($conn->query($sql) === TRUE) {
          echo "Jauns ieraksts " . $Students . " veiksmīgi pievienots!";
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }

$conn->close();
        
        


?>
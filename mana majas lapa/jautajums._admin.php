<?php
include 'db.php';
?>

<form method = "post">
        <label for="Jaut">Jautājumi</label><br>
        <input type="text" name="Jaut" placeholder="Jautājums"><br>
        <label for="ATB1">Atbilde 1</label><br>
        <input type="text" name="ATB1" placeholder="Atbilde 1"><br>
        <label for="ATB2">Atbilde 2</label><br>
        <input type="text" name="ATB2" placeholder="Atbilde 2"><br>
        <label for="ATB3">Atbilde 3</label><br>
        <input type="text" name="ATB3" placeholder="Atbilde 3"><br>
        <label for="ATB4">Atbilde 4</label><br>
        <input type="text" name="ATB4" placeholder="Atbilde 4"><br>
        <label for="Pareizi">Kura būs pareizā atbilde:</label><br>
        <select name="Pareizi" id="Pareizi">
                <option value="1">Pareizā atbilde ir 1</option>
                <option value="2">Pareizā atbilde ir 2</option>
                <option value="3">Pareizā atbilde ir 3</option>
                <option value="4">Pareizā atbilde ir 4</option>
        </select>
                <input type="submit" value="submit">
</form>

<?php

if (isset($_POST['submit'])) {

	$jaut = $_POST['Jaut'];
	$atb1 = $_POST['ATB1'];
        $atb2 = $_POST['ATB2'];
        $atb3 = $_POST['ATB3'];
        $atb4 = $_POST['ATB4'];
        $pareizaAtb = $_POST['Pareizi'];
        
         $sqlget = "SELECT * FROM jautajumi WHERE Jaut = '$jaut'";
        $query = mysqli_query($conn, $sqlget);
        
        if(mysqli_num_rows($query)){
 echo "Šāds jautājums jau eksistē";
        } else{

$sql = "INSERT INTO jautajumi (Jaut, ATB1, ATB2, ATB3, ATB4, Pareizi) 
        VALUES ('$jaut', '$atb1','$atb2','$atb3','$atb4', '$pareizaAtb')";
        
        if(mysqli_query($conn, $sql)){
          echo "Dati pievienoti";
        }else{
          echo "neizdevās";
          mysqli_error($conn);
}
}
}
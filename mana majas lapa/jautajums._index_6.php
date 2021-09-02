<?php
include 'db.php';
?>

<form method = "post" action = "process.php">
        <label for="Vards">Ievadiet jūsu vārdu</label><br>
        <input type="text" name="Vards" placeholder="Vards"><br>
        <?php $sql = "SELECT * FROM jautajumi";
                $result = $conn-> query ($sql);
                $punkti = 0;
                
        if($result-> num_rows > 0){
        while ($row = $result-> fetch_assoc()) {
                $id = $row['ID'];
                $jaut = $row['Jaut'];
                $atb1 = $row['ATB1'];
                $atb2 = $row['ATB2'];
                $atb3 = $row['ATB3'];
                $atb4 = $row['ATB4'];
                $pareizi = $row['Pareizi'];
                
                echo "<div class='jautajums-".$id."'><h1>" . $jaut . "</h1><br>";
                echo "<input type='radio' name='Jaut-".$id."' value='1'><label for='ATB1'>". $atb1 ."</label><br>";
                echo "<input type='radio' name='Jaut-".$id."' value='2'><label for='ATB2'>". $atb2 ."</label><br>";
                echo "<input type='radio' name='Jaut-".$id."' value='3'><label for='ATB3'>". $atb3 ."</label><br>";
                echo "<input type='radio' name='Jaut-".$id."' value='4'><label for='ATB4'>". $atb4 ."</label><br>";
                
                }
                }else{
                echo "nav rezultātu";
                }
                $conn-> close();
                
                ?>
                <input type="submit" name="submit" value="Iesniegt">
</form>
                
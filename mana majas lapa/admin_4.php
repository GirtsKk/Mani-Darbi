<?php include 'db.php'; 

$sql2 = "SELECT Product2.ID, Product2.PR_Heading, Product2.PR_IMG, Product2.PR_Text,
About_us.ID, About_us.Heading_ab, About_us.IMG, About_us.Text,
Header_2.ID, Header_2.Logo, Header_2.Header1, Header_2.Header2, Header_2.Header3, Header_2.Header4, Header_2.BG_IMG, Header_2.Heading,
_contact.id, _contact.phone, _contact.adress, _contact.map
FROM Product2 
JOIN About_us 
ON Product2.ID = About_us.ID
JOIN Header_2
ON Header_2.ID = About_us.ID
JOIN Kontakts
ON Kontakts.ID = Header_2.ID";

$result = $conn -> query($sql2);

if($result -> num_rows > 0){
 while($row = $result -> fetch_assoc()){
         $dblogo = $row['Logo'];
         $dbh1 = $row['Header1'];
         $dbh2 = $row['Header2'];
         $dbh3 = $row['Header3'];
         $dbh4 = $row['Header4'];
         $dbbgimg = $row['BG_IMG'];
         $dbheading = $row['Heading'];
         $dbabheading = $row['Heading_ab'];
         $dbabimg = $row['IMG'];
         $dbabtxt = $row['Text'];
         $dbprhead = $row['PR_Heading'];
         $dbprimg = $row['PR_IMG'];
         $dbprtxt = $row['PR_Text'];
         $dbcophone = $row['Phone'];
         $dbcoadress = $row['Adress'];
         $dbcomap = $row['MAP'];
         
         
?>

<form method="post">
        <label for="Logo">Logo saite</label><br>
        <input type="Text" name="Logo" value="<?php echo $dblogo ?>"><br>
        <label for="Header1">Sadaļa 1</label><br>
        <input type="Text" name="Header1" value="<?php echo $dbh1 ?>"><br>
        <label for="Header2">Sadaļa 2</label><br>
        <input type="Text" name="Header2" value="<?php echo $dbh2 ?>"><br>
        <label for="Header3">Sadaļa 3</label><br>
        <input type="Text" name="Header3" value="<?php echo $dbh3 ?>"><br>
        <label for="Header4">Sadaļa 4</label><br>
        <input type="Text" name="Header4" value="<?php echo $dbh4 ?>"><br>
        <label for="BG_IMG">BG attēls</label><br>
        <input type="Text" name="BG_IMG" value="<?php echo $dbbgimg ?>"><br>
        <label for="Heading">Virsraksts</label><br>
        <input type="Text" name="Heading" value="<?php echo $dbheading ?>"><br>
        <label for="Heading_ab">Par mums virsraksts</label><br>
        <input type="Text" name="Heading_ab" value="<?php echo $dbabheading ?>"><br>
        <label for="IMG">Par mums attēls</label><br>
        <input type="Text" name="IMG" value="<?php echo $dbabimg ?>"><br>
        <label for="Text">Par mums teksts</label><br>
        <input type="Text" name="abtxt" value="<?php echo $dbabtxt ?>"><br>
        <label for="PR_Heading">Produkta virsraksts</label><br>
        <input type="Text" name="PR_Heading" value="<?php echo $dbprhead ?>"><br>
        <label for="PR_IMG">Produkta attēls</label><br>
        <input type="Text" name="PR_IMG" value="<?php echo $dbprimg ?>"><br>
        <label for="PR_Text">Produkta teksts</label><br>
        <input type="Text" name="PR_Text" value="<?php echo $dbprtxt ?>"><br>
        <label for="Phone">Kontakta tālrunis</label><br>
        <input type="Text" name="Phone" value="<?php echo $dbcophone ?>"><br>
        <label for="Adress">Adrese</label><br>
        <input type="Text" name="Adress" value="<?php echo $dbcoadress ?>"><br>
        <label for="MAP">Karte</label><br>
        <?php echo $dbcomap ?>
        <input type="Text" name="MAP"><br>
        
        taustiņš jāuzspiež divreiz XD
        <input type="submit" name="submit" value="Saglabāt">
</form>

<?php
    }
}

if(isset($_POST['submit'])){

        header("Location: admin.php");
        
         $logo = $_POST['Logo'];
         $h1 = $_POST['Header1'];
         $h2 = $_POST['Header2'];
         $h3 = $_POST['Header3'];
         $h4 = $_POST['Header4'];
         $bgimg = $_POST['BG_IMG'];
         $heading = $_POST['Heading'];
         $abheading = $_POST['Heading_ab'];
         $abimg = $_POST['IMG'];
         $abtxt = $_POST['Text'];
         $prhead = $_POST['PR_Heading'];
         $primg = $_POST['PR_IMG'];
         $prtxt = $_POST['PR_Text'];
         
         $sql = "UPDATE Header_2 SET Logo='$logo', Header1='$h1', Header2='$h2', Header3='$h3', Header4='$h4', 
         bgimg='$bgimg', heading='$heading' WHERE id=1";
         
         $sqlab = "UPDATE About_us SET Heading_ab='$abheading', IMG='$abimg', Text='$abtxt'
         WHERE id=1";
         
         $sqlpr = "UPDATE Product2 SET PR_Heading='$prhead', PR_IMG='$primg', PR_Text='$prtxt'";
                
         if((mysqli_query($conn, $sql))&&(mysqli_query($conn, $sqlab))&&(mysqli_query($conn, $sqlpr))){
                 echo "Dati pievienoti";
         }else{
                 echo "Dati netika pievienoti";
                 mysqli_error($conn);
         }
}
?>
         
         
         
















        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
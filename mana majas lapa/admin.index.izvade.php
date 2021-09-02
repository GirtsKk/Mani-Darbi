<?php
include 'db.php';

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
         $hdlogo = $row['Logo'];
         $hdh1 = $row['Header1'];
         $hdh2 = $row['Header2'];
         $hdh3 = $row['Header3'];
         $hdh4 = $row['Header4'];
         $hdbgimg = $row['BG_IMG'];
         $hdheading = $row['Heading'];
         $hdabheading = $row['Heading_ab'];
         $hdabimg = $row['IMG'];
         $hdabtxt = $row['Text'];
         $hdprhead = $row['PR_Heading'];
         $hdprimg = $row['PR_IMG'];
         $hdprtxt = $row['PR_Text'];
         $hdcophone = $row['Phone'];
         $hdcoadress = $row['Adress'];
         $hdcomap = $row['MAP'];
         
         
?>
<style>
* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 50%;
  padding: 10px;
  height: 300px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

.foot li {
  float: left;
  padding: 22px;
  list-style-type:none;
}
  
</style>  

<nav class="navbar navbar-default">
        <div>
        <div>
        <a href="#"><img src="<?php echo $hdlogo ?>" alt="Logo" width="50"></a>
        </div>
        <ul class="nav navbar-nav">
                <li class="active"><a href="index.php"><?php echo $hdh1 ?></a></li>
                <li><a href="#"><?php echo $hdh2 ?></a></li>
                <li><a href="#"><?php echo $hdh3 ?></a></li>
                <li><a href="#"><?php echo $hdh4 ?></a></li>
        </ul>
        </div>
        </nav>
        
        <div>
                <img src="<?php echo $hdbgimg ?>" alt="<?php echo $hdheading ?>" style="width:100%; height:600px;">
                <h1 class="bg-text" style="position: absolute;
                top: 40%;
                left: 50%;
                color: #fff;"><?php echo $hdheading ?></h1>
         </div>
         
         <div class="container">
                 <div class="row">
                 <div class="column" style="background-color:#aaa">
                 <img src="<?php echo $hdabimg ?>" alt="<?php echo $hdabheading ?>" style="max=width:560px">
                 </div>
                 <div class="column" style="background-color:#bbb">
                 <h2><?php echo $hdabheading ?></h2>
                 <p><?php echo $hdabtxt ?></p>
                 </div>
                 </div>
                 <div class="row">
                 <div class="column" style="background-color:#aaa">
                 <h2><?php echo $hdprhead ?></h2>
                 <p><?php echo $hdprtxt ?></p>
                 </div>
                 <div class="column" style="background-color:#bbb">
                 <img src="<?php echo $hdprimg ?>" alt="<?php echo $hdprhead ?>" style="max=width:300px">
                 </div>
                 </div>
                 
                 <footer>
                         <ul class= "foot">
                         <li><?php echo $dbcophone ?></li>
                         <li><?php echo $dbcoadress ?></li>
                         <li><?php echo $dbcomap ?></li>
                         </ul>
                 </footer>
                         
         
         <?php
         
         }
}

?>
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                












<?php
include 'db.php';

$sql = "SELECT * FROM Order";

$result = $conn -> query ($sql);

if($result->num_rows>0){
   while($row=$result->fetch_assoc()){
      $Order_ID = $row['Order_ID'];
      $Klienta_ID = $row['Klienta_ID'];
      $Produkta_ID = $row['Produkta_ID'];
      $Adrese_ID = $row['Adrese_ID'];
      $order_date = $row['Order_Date'];
      $order_status = $row['order_statuss'];
      
?>
 <ul>
    <li>
       <p>Sūtijuma ID</p>
       <p><?php echo $Order_ID ?></p>
    </li>
    <li>
       <p>Lietotāja ID</p>
       <p><?php echo $Klienta_ID ?></p>
    </li>
    <li>
       <p>Produkta ID</p>
       <p><?php echo $Produkta_ID ?></p>
    </li>
    <li>
       <p>Adreses ID</p>
       <p><?php echo $Adrese_ID ?></p>
    </li>
    <li>
       <p>Pasūtijuma laiks</p>
       <p><?php echo $order_date ?></p>
    </li>
    <li>
       <p>Pasūtijuma statuss</p>
       <p><?php echo $order_status ?></p>
    </li>
    
 </ul>
 
   <form method="post">
     <select name "statuss">
       <option value="Pasūtīts">Pasūtīts</option>
       <option value="Sagatavo">Sagatavo</option>
       <option value="Izsūtīts">Izsūtīts</option>
     </select>
     <input type="submit" name="submit" value="ievietot">
    </form>
    <?php
    $StatussChange = $_POST['statuss'];
    $sqlUpd = "UPDATE order SET order_statuss = '$statusChange'";
    if($conn->query($sqlUpd)===TRUE){
    echo "Statuss samainīts!";
    }else{
    echo "Jopcik";
    mysqli_error($conn);
      }   
   }
}
?>


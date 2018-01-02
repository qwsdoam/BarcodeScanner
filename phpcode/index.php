<?php
$mysqli = new mysqli('localhost','','','');
$sql = $mysqli->query("SELECT * FROM scanable order by RAND() LIMIT 1");  
$row = $sql->fetch_assoc();
$string = $row['bascode'];

?>
<DOCTYPE html>
<html>
  <head>
    <title>Test</title>
</head>    
    <body>
      <center>
        <img src='qr.php?text=<?=$string;?>'/>
</center>
</body>
</html>


<form action="hash.php" method="GET">
  Enter your string : 
  <input name="string"></input>
  <br>
  <input type="submit" style="margin-left: 180px; margin-top: 10px;"></input>
</form>
<?php
   $input = $_GET['string'];
   $j = hash_algos();
   foreach($j as $hash)
     echo "{$hash} : ".hash($hash, $input)."<br>";
   
?>
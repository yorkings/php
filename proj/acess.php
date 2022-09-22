<?php
  $conn=new PDO('mysql:host=localhost;port=3310;dbname=first', 'root', '');
  $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
   $sql=$conn->prepare('SELECT *FROM login');
   $sql->execute();
   $f=fetchAll(PDO::FETCH_ASSOC);
   echo '<pre>';
   var_dump($f) ;
   echo '</pre>'
?>
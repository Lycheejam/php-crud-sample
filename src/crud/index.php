<?php
  $dsn = 'mysql:host=db;dbname=SAMPLEDB;charset=utf8mb4';
  $username = 'sampleuser';
  $password = 'password';
  $options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => false
  ); 
  
  try {
    $pdo = new PDO($dsn, $username, $password, $options);
    $result = $pdo->query('select * from SAMPLETBL');
  
    foreach($result as $row) {
      echo "No.{$row['ID']}<br>";
      echo "NAME : {$row['NAME']}<br>";
      echo "AGE : {$row['AGE']}<br>";
      echo '<br>';
    }
  } catch (PDOException $e) {
    exit($e->getMessage()); 
  }
?>
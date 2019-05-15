<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
  </head>
  <body>
    <?php
      $dsn = 'mysql:host=db;dbname=SAMPLEDB;charset=utf8mb4';
      $username = 'sampleuser';
      $password = 'password';
      $options = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => false
      ); 
    ?>

    <table>
      <tr>
        <th>No.</th>
        <th>NAME</th>
        <th>AGE</th>
      </tr>

      <?php
        try {
          $pdo = new PDO($dsn, $username, $password, $options);
          $result = $pdo->query('select * from SAMPLETBL');
        
          foreach($result as $row) {
            echo "<tr>";
            echo "<td>{$row['ID']}</td>";
            echo "<td>{$row['NAME']}</td>";
            echo "<td>{$row['AGE']}</td>";
            echo "</tr>";
          }
        } catch (PDOException $e) {
          exit($e->getMessage()); 
        }
      ?>
    </table>
    
    
  </body>
</html>
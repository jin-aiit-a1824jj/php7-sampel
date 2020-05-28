<!DOCTYPE html>

<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <link rel="stylesheet" href="css/style.css">
  
  <title>PHP</title>
</head>

<body>
  <header>
    <h1 class="font-weight-normal">PHP</h1>
  </header>

  <main>
    <h2>Practice</h2>
    <pre>
      <?php
        try {
          $db = new PDO('mysql:dbname=mydb;host=127.0.0.1;charset=utf8','mydbuser', 'PassW0rd');
          
        } catch(PDOException $e) {
          echo 'DB接続エラー：'.$e->getMessage();
        }

        // $count = $db->exec('INSERT INTO my_items SET maker_id=1, item_name="もも", price=210, keyword="缶詰、ビンク、甘い", sales=0 ');
        // echo $count.'件のデータを挿入しました'; 

        $records = $db->query('SELECT * FROM my_items');
        while($record = $records->fetch()){
          print($record['item_name']."\n");
        }

        var_dump($db->errorInfo());
      ?>
    </pre>
  </main>

</body>
</html>
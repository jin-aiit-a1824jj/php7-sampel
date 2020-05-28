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

          $statement = $db->prepare('INSERT INTO memos SET memo=? ');
          $statement->execute(array($_POST['memo']));
          //$statement->bindColumn(1, $_POST['memo']);
          echo 'メッセージが登録されました';

        } catch(PDOException $e) {
          echo 'DB接続エラー：'.$e->getMessage();
        }
        //var_dump($db->errorInfo());
      ?>
    </pre>
  </main>

</body>
</html>
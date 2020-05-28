<?php
try {
  $db = new PDO('mysql:dbname=mydb;host=127.0.0.1;charset=utf8','mydbuser', 'PassW0rd');
} catch(PDOException $e) {
  echo 'DB接続エラー：'.$e->getMessage();
}
?>

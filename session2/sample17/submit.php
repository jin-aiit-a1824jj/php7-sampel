<!DOCTYPE html>

<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <link rel="stylesheet" href="../css/style.css">
  
  <title>PHP</title>
</head>

<body>
  <header>
    <h1 class="font-weight-normal">PHP</h1>
  </header>

  <main>
    <h2>Practice</h2>
    <pre>    
      お名前-GET：<?php
        print(htmlspecialchars($_REQUEST['my_name'], ENT_QUOTES));
        // print(htmlspecialchars($_GET['my_name'], ENT_QUOTES));
      ?>
      お名前-POST：<?php
        // print(htmlspecialchars($_REQUEST['my_name'], ENT_QUOTES));
        print(htmlspecialchars($_POST['my_name'], ENT_QUOTES));
      ?>
     
    </pre>
    
  </main>

</body>
</html>
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
        $i = 1;
        while($i <= 365){
          print($i."\n");
          $i += 1;
        }
        print("\n\n\n");
        for ($j = 1; $j <= 365; $j++){
          print($j."\n");
        }
      ?>
    </pre>
  </main>

</body>
</html>
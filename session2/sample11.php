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
    3,000円のものから、100円値引きした場合は、
    <?php 
      print("floor: ".floor(100/ 3000 * 100)."\n");
      print("ceil: ".ceil(100/ 3000 * 100)."\n");
      print("round: ".round(100/ 3000 * 100)."\n");
      ?>%引きです。
    </pre>
  </main>

</body>
</html>
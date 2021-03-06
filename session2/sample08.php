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
        $week_name = ['日','月','火','水','木','金','土'];
        
        for($i = 0; $i < 7; $i++):
          print($week_name[date('w', strtotime("+".$i."day"))]);
          print "\n";
        endfor;

      ?>
    </pre>
  </main>

</body>
</html>
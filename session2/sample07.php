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
        // for($i = 1; $i < 366; $i++ ){
        //   print(date('n/j(D)', strtotime("+".$i."day")));
        //   print "\n";
        // }
        for($i = 1; $i < 366; $i++):
          print(date('n/j(D)', strtotime("+".$i."day")));
          print "\n";
        endfor;
        // while():
        // endwhile;
      ?>
    </pre>
  </main>

</body>
</html>
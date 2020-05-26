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
        $fruits = ['apple'=>'リンゴ',
                  'grape'=>'ブドウ',
                  'lemon'=>'レモン',
                  'tomato'=>'トマト',
                  'peach'=>'モモ'];
        
        foreach ($fruits as $key => $value){
          print($key.":".$value."\n");
        }

      ?>
    </pre>
  </main>

</body>
</html>
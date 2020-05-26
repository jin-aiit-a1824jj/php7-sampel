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
        if(date('G') < 9){
          print('※現在受付時間外です');
        } else{
          print('ようこそ');
        }

        $x = 'あいうえお';
        if($x !== ''){
          print('xには文字が入っています');
        }

        $y = 0;
        if(!$y){
          print('yは0です');
        }

      ?>
    </pre>
  </main>

</body>
</html>
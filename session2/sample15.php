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
        // https://stackoverflow.com/questions/46610501/class-simplexmlelement-not-found/51905421
        // https://stackoverflow.com/questions/49447168/call-to-undefined-function-simplexml-load-file
        // https://qiita.com/Mitsunori_Tsukada/items/9e7fad3e3ea49fc9a2c7        
        $xmlTree = simplexml_load_file('https://h2o-space.com/feed/');
        //var_dump($xmlTree);
        foreach($xmlTree->channel->item as $item):
      ?>
      <li><a href="<?php print($item->link); ?>"><?php print($item->title) ?></a></li>
      <?php endforeach;?> 
    </pre>
  </main>

</body>
</html>
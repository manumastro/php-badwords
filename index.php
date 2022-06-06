<?php
$paragrafo = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi hic deleniti sit possimus dignissimos optio assumenda, sequi voluptate sunt repellat, earum fugiat ad consequuntur corrupti. Commodi voluptatem sit obcaecati quos et culpa ut? Repellendus repellat laudantium, quo officiis, ipsam blanditiis id magni recusandae dolores tenetur architecto ad! Assumenda ullam fugiat possimus temporibus aut repellendus soluta omnis explicabo illum. Ullam, accusantium ipsam ad molestias quidem corrupti sapiente quisquam nihil magnam. Ducimus fuga inventore ipsa incidunt ut voluptatibus suscipit earum! Cum magni deleniti, quos hic accusantium reprehenderit quia. Provident aspernatur laborum necessitatibus nisi, distinctio quidem assumenda nostrum impedit rem soluta eum tempora?';

$censura = $_GET['censura'];

$paragrafo_censurato = '';
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Badwords</title>
</head>
<body>

  <h1>
    Paragrafo non censurato: <br>
    <?php echo $paragrafo?>
  </h1>

  <h1>
    Lunghezza paragrafo non censurato: <br>
    <?php echo strlen($paragrafo)?>
  </h1>

  <hr>

  <h1>
    Paragrafo censurato con la parola: <?php echo $censura?> <br>
    <?php echo $paragrafo_censurato = str_replace($censura, "***", $paragrafo)?>
  </h1>

  <h1>
    Lunghezza paragrafo censurato: <?php echo strlen($paragrafo_censurato)?>
  </h1>

  
</body>
</html>
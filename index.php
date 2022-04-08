<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php 
    $text = 'you made me a, you made me a believer, believer
    (pain!)
    You break me down and build me up, believer, believer
    (pain!)
    oh, let the bullets fly, oh, let them rain
    my life, my love, my drive, it came from...
    (Pain!)
    you made me a, you made me a believer, believer';
    echo $text . ' (' . strlen($text) . ')';
  ?>
  <form styleaction="">
    <input name="censored" type="text">
    <input type="submit" value="Censura!">
  </form>
  <?php 
    
    $bad_word = $_GET['censored'];
    $censura = '***';
    $censored_text = str_replace($bad_word, $censura, $text);
    echo $censored_text;
    echo ' (' . strlen($censored_text) . ')';
  ?>
</body>
</html>
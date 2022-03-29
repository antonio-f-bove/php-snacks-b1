<?php 

$partite = [
  [
    'casa' => 'Virtus Bologna',
    'punti_casa' => 76,
    'ospiti' => 'Scandone Avellino',
    'punti_ospiti' => 79
  ],
  [
    'casa' => 'Olimpia Milano',
    'punti_casa' => 46,
    'ospiti' => 'Varese',
    'punti_ospiti' => 70
  ],
  [
    'casa' => 'Ginnastica Roma',
    'punti_casa' => 76,
    'ospiti' => 'Reggiana',
    'punti_ospiti' => 42
  ],
  [
    'casa' => 'Juvecaserta',
    'punti_casa' => 45,
    'ospiti' => 'Scaligera Verona',
    'punti_ospiti' => 98
  ],
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 1</title>
</head>
<body>

  <ul style="list-style: none">
    <?php 
    for ($i = 0; $i < count($partite); $i++) {
      extract($partite[$i]);
      ?>
      <li><?php
      echo "$casa - $ospiti | $punti_casa-$punti_ospiti";
    }
    ?>
    </li>
  </ul>
</body>
</html>
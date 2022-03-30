<?php

$students = [
  [
    'name' => 'Mimmo',
    'lastname' => 'Mi',
    'grades' => [],
  ],
  [
    'name' => 'Pino',
    'lastname' => 'Pi',
    'grades' => [],
  ],
  [
    'name' => 'Dino',
    'lastname' => 'Di',
    'grades' => [],
  ],
  [
    'name' => 'Lino',
    'lastname' => 'Li',
    'grades' => [],
  ],
];

foreach ($students as &$student) {
  for ($i = 0; $i < 10; $i++) {
    $student['grades'][] = rand(1, 100);
  }
}
unset($student);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 7</title>
</head>
<body>
  
  <dl>
    <?php 
    foreach ($students as $student):
      extract($student);
      // foreach ($grades as $grade) {
      //   $sum += $grade;
      // }
      $avg = array_sum($grades) / count($grades);
      ?>
      <dt><?php echo "$name $lastname" ?></dt>
      <dd><?php echo "La media dei voti è $avg" ?></dd>
      <?php
    endforeach;
    ?>
  </dl>
</body>
</html>
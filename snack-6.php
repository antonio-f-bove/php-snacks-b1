<?php
 
$db = [
  'teachers' => [
    [
        'name' => 'Michele',
        'lastname' => 'Papagni'
    ],
    [
        'name' => 'Fabio',
        'lastname' => 'Forghieri'
    ]
  ],
  'pm' => [
    [
        'name' => 'Roberto',
        'lastname' => 'Marazzini'
    ],
    [
        'name' => 'Federico',
        'lastname' => 'Pellegrini'
    ]
  ]
];

$colors = [
  'teachers' => 'grey',
  'pm' => 'green',
]
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>snack 6</title>
</head>
<body>

  <?php 
  foreach ($db as $role => $people) {
    ?>
    <div style="background-color: <?php echo $colors[$role] ?>; width: min-content;">
      <ul style="list-style: none">
        <?php
        foreach ($people as $person) {
          ?>
          <li><?php echo "{$person['name']} $person[lastname]" ?></li>
          <?php
        }
        ?>
      </ul>
    </div>
    <?php
  }
  ?>
</body>
</html>
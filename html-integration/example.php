<?php
  $user = [
    'name'=>'Jhon',
    'age' => '23',
    'ocupation' => 'Software Technician'
  ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h2>This is not correct.</h2>
  <?php
    if ($user['age']<21) {
      echo "<p>The user is minor than 21 years old</p>";
    } else {
      echo "<p>The user is mayor than 21 years old</p>";
    }
  ?>
  
</body>
</html>

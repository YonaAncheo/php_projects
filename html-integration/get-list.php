<?php
$url = "http://localhost/php_projects/html-integration/categories.php";
$response = @file_get_contents($url); // @ para suprimir errores visibles
$data = [];

if ($response === FALSE) {
    // Manejo de error
    $data = [];
} else {
    $data = json_decode($response, true);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <ul>
    <?php foreach ($data as $item): ?>
      <li><?php echo htmlspecialchars($item['name']); ?></li>
    <?php endforeach; ?>
  </ul>
  
</body>
</html>

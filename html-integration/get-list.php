<?php
#FMI, how to send a POST Request with PHP? -> https://www.geeksforgeeks.org/how-to-send-a-post-request-with-php/
#$url = "http://localhost/php_projects/html-integration/categories.php";
$url = "https://api.escuelajs.co/api/v1/categories";
#url = "https://api.escuelajs.co/api/v1/categories/2";


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
    <!-- <li><?php #echo $data['name']; ?></li> -->

    <?php foreach ($data as $item): ?>
      
      <li><?php echo htmlspecialchars($item['name']); ?></li>
    <?php endforeach; ?>
  </ul>
  
</body>
</html>

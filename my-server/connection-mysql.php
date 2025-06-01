<?php
  $host = 'localhost';
  $user = 'xx';
  $pass = 'xx';
  $data_base = 'pruebajpa';

  // create connection
  $conn = new mysqli($host,$user,$pass,$data_base);
  $output = [];

  if ($conn->connect_error) {
    # code...
    die('Connection fail: ' . $conn->connect_error);
  }

  //echo "Connection Succes!";

  // creating my GET query 
  $sql = 'SELECT ID, APLLIDO, FECHANAC, NOMBRE FROM ALUMNO';
  $result = $conn->query($sql);

  while ($row = $result->fetch_assoc()) {
    # code...
    $output[] = $row;
  }

  echo json_encode($output);

  $conn->close();
?>

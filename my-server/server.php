<?php
// server.php

header('Content-Type: application/json');

// We simulate data from the server. 
$data = [
  "message" => "Hi from PHP",
  "date" => date("Y-m-d H:i:s")
];

// We convert the data to JSON and respond to it.
echo json_encode($data);

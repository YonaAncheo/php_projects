<?php
  header('Content-Type: application/json; charset=utf-8');

// Leer datos JSON del cuerpo de la solicitud
  $input = json_decode(file_get_contents('php://input'), true);

  $output = [
    'media' => 0,
    'html' => ''
  ];  

  if (!isset($input['numbers']) || !is_array($input['numbers'])) {
    echo json_encode(['error' => 'Invalid input...']);
    exit;
  }

  $total = 0;
  $count = count($input['numbers']);

  $output['html'] .= '<h3.' . htmlspecialchars($input['title']) . '</h3>';
  $output['html'] .= '<ul>';

  foreach ($input['numbers'] as $number) {
    # code...
    $output['html'] .= '<li>' . htmlspecialchars($number) . '</li>';
    $total += $number;
  }
  $total /= $count;
  $output['html'] .= '</ul>';
  $input['media'] = $total;
  $output['html'] .= '<h3>RESULTADO: ' . htmlspecialchars($total) . '</h3>'; 

  echo json_encode($output);

?>

<?php
header('Content-Type: application/json; charset=utf-8');

// Leer datos JSON del cuerpo de la solicitud
$input = json_decode(file_get_contents('php://input'), true);

$output = [
  'media' => 0,
  'html' => ''
];

// Validar entrada
if (!isset($input['numbers']) || !is_array($input['numbers'])) {
  echo json_encode(['error' => 'Datos inválidos']);
  exit;
}

// Calcular media
$total = 0;
$count = count($input['numbers']);

$output['html'] .= '<h3>' . htmlspecialchars($input['title']) . '</h3>';
$output['html'] .= '<ul>';

foreach ($input['numbers'] as $n) {
  $output['html'] .= '<li>' . htmlspecialchars($n) . '</li>';
  $total += $n;
}

$output['html'] .= '</ul>';
$output['media'] = round($total / $count, 2);

echo json_encode($output);

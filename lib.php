<?php

function handle_request() {
  $result = array();
  if ($_GET['date']) {
    $result = generate_code($_GET['date']);
  }
  $out = render_template('main.tpl.php', $result);
  header('Content-Type: text/html; charset=utf-8');
  header('Content-Length: ' . strlen($out));
  print $out;
}

function generate_code($date) {
  include_once 'parkhotel_codegenerator/codegenerator.php';
  list($year, $month, $day) = explode('-', $date);
  $codes = array();
  for ($station = 21; $station <= 25; $station++) {
    $result .= '<table>';
    for ($duration = 1; $duration <= 3; $duration++) {
      $codes[$station][$duration] = generatecode($year, $month, $day, $duration, $station);
    }
  }

  $result = '<table class="codes"><tr class="header">';
  $result .= '<th></th>';
  for ($i = 0; $i < 3; $i++) {
    $result .= '<th>' . date('Y-m-d', strtotime($date) + 86400 * i) . '</th>';
  }
  $result .= '</tr>';

  foreach ($codes as $station => $durations) {
    foreach ($durations as $duration => $code) {
      $result .= '<tr>';
      if ($duration == 1) {
        $result .= '<td rowspan="3" class="station">';
        $result .= 'Station ' . $station;
        $result .= '</td>';
      }
      for ($i = 1; $i <= 3; $i++) {
        $result .= '<td class="code">';
        $result .= ($i <= $duration) ? $code : '&ndash;';
        $result .= '</td>';
      }
      $result .= '</tr>';
    }
  }
  $result .= '</table>';

  return array(
    'result' => $result,
    'date' => $date,
  );
}

function render_template($template_file, $variables) {
  extract($variables, EXTR_SKIP);
  ob_start();
  include $template_file;
  return ob_get_clean();
}

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
  return array(
    'result' => 'results',
    'date' => $date,
  );
}

function render_template($template_file, $variables) {
  extract($variables, EXTR_SKIP);
  ob_start();
  include $template_file;
  return ob_get_clean();
}

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
    'date' => $date,
    'result' => 'results'
  );
}

function render_template($template_file, $variables) {
  extract($variables, EXTR_SKIP);               // Extract the variables to a local namespace
  ob_start();                                   // Start output buffering
  include $template_file;   // Include the template file
  return ob_get_clean();                        // End buffering and return its contents
}

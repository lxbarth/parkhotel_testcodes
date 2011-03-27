<?php

function handle_request() {
  $result = $_GET;
  $out = render_template('main.tpl.php', array('result' => print_r($result, true)));
  header('Content-Type: text/html; charset=utf-8');
  header('Content-Length: ' . strlen($out));
  print $out;
}

function render_template($template_file, $variables) {
  extract($variables, EXTR_SKIP);               // Extract the variables to a local namespace
  ob_start();                                   // Start output buffering
  include $template_file;   // Include the template file
  return ob_get_clean();                        // End buffering and return its contents
}

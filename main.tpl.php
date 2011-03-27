<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Parkhotel codes</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<script src='jquery-1.5.1.min.js'></script>
  <script src='jquery-ui-1.8.11.custom.min.js'></script>
  <script>
  	$(function() {
  		$("#datepicker").datepicker();
  	});
  </script>
</head>
<body id="home">
<h1>Parkhotel codes</h1>
<form action="" method="get">
  <label for="date">Start datum</label>
  <input type="text" name="date" id="datepicker">
  <input type="submit">
</form>
<?php if ($result):?>
<div class="result">
  <?php print $result ?>
</div>
<? endif; ?>
</body>
</html>

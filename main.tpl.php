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
      $("#datepicker").datepicker({ dateFormat: 'yy-mm-dd' });
  	});
  </script>
</head>
<body id="home">
<div class="datum-wrapper">
<div class="datum">
  <h2>Start datum</h2>
  <form action="" method="get">
    <input type="text" name="date" id="datepicker" value="<?php print $date ?>">
    <input type="submit">
  </form>
</div>
</div>
<?php if ($result):?>
<div class="result-wrapper">
<div class="result">
  <h2>Codes beginnend <?php print $date ?></h2>
    <?php print $result ?>
</div>
</div
<? endif; ?>
</body>
</html>

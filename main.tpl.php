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
      $("#datepicker").change(function() {
        console.log('submit');
        $('form').submit();
      });
  	});
  </script>
</head>
<body id="home">
<div class="datum-wrapper">
<div class="datum">
  <h2>Start datum</h2>
  <form action="" method="get">
    <input type="text" name="date" id="datepicker" value="<?php print $date ?>">
  </form>
</div>
</div>
<?php if ($result):?>
<div class="result-wrapper">
<div class="result">
    <?php print $result ?>
</div>
</div
<? endif; ?>
</body>
</html>

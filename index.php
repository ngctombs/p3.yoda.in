<?php define('TABLE_DIMENSIONS', 10, TRUE); 
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Electrolize' rel='stylesheet' type='text/css'>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	<script src="js/functions.js"></script>
</head>
<body oncontextmenu="return false;">
	<div class="header">
		<h1>Pixel Art</h1>
	</div>
	<div class="grid">
		<table cellspacing="0">
			<?php for ($i=0; $i<TABLE_DIMENSIONS; $i+=1) : ?>
				<tr>
				<?php for ($j=0; $j<TABLE_DIMENSIONS; $j+=1) : ?>
					<td></td>
				<?php endfor; ?>
				</tr>
			<?php endfor; ?>
		</table>
	</div>
	<div class="sidebar">
		<h2>Chose your colour!</h2>
		<input type="text" value="#333" id="hex_field">
		<button class="erase">Wipe Canvas</button>
	</div>
</body>
</html>
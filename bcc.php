<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style type="text/css">
		.bcc{
			margin: 10px;
			float: left;
			background-color: #333;
			border: 1px solid;
			width: 200px;
			color: white;
		}
	</style>
</head>
<body>
	
	<?php 
		for ($i=2; $i<10 ; $i++) { ?>
			<div class="bcc">
	 <?php for ($j=1; $j<=10 ; $j++) { 
			echo "$i x $j =",$i*$j,"<br>";
			} ?>
		</div>	
	<?php }

	?>
</body>
</html>
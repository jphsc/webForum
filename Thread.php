<!DOCTYPE html>
<html lang="pt-br">
<head>
	<!--<meta http-equiv="refresh" content="5">-->
	<meta charset="utf-8">
	<title>Thread</title>
	<link rel="stylesheet" type="text/css" href="estiloThread.css">
</head>
<body>

	<div class="title">
		<?php
			$title = $_GET["title"];
			$text = $_GET["text"];
			$name = $_GET["name"];
			echo "<h1>$title</h1>";
		?>
	</div>

	<div style="color: grey">
		<?php

			echo "$text";

			echo "<br><hr><br>";

		?>
	</div>
	

</body>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<!--<meta http-equiv="refresh" content="5">-->
	<meta charset="utf-8">
	<title>New Thread</title>
	<link rel="stylesheet" type="text/css" href="estiloNewThread.css">
</head>
<body>
	<h1>New Thread</h1>

	<form method="get" action="Thread.php">
		<div>
			<input type="text" name="title" placeholder="Title:">
		</div>

		<br><br>

		<div>
			<input type="textarea" name="text" class="textArea" placeholder="Here is a some text input.">
		</div>

		<br><br>

		<div>
			<span>
				<input type="text" name="name" placeholder="Your name:">
			</span>
			<span>
				<!--Botão de enviar-->
				<button type="submit" name="create">Create</button>
			</span>
		</div>
	</form>

</body>
</html>
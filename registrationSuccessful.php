<!doctype html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		<meta charset="utf-8">
		<meta name="description" content="Submit the information of your dog">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="website devlopment, HTML, CSS">
		<meta name="author" content="Mun">
		<title>Registeration Successful Page</title>
	</head>
	<body>
		<h1>Registration Successful!</h1>
		<h2>
			<?php
				if(isset($message) && $message !== "")
					echo nl2br(htmlspecialchars($message));
			?>
			<p><a href="galleryHome.html">Click here to continue</a></p>
		</h2>
	</body>
</html>
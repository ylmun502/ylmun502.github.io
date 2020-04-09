<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		<meta charset="utf-8">
		<meta name="description" content="Submit the information of your dog">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="website devlopment, HTML, CSS">
		<meta name="author" content="Mun">
		<title>Account Registration and Account Information Retrieval</title>
	</head>
	<body>
		<header>
			<t>** Account Registration & Information Retrieval **</t>
			<hr>
			<nav>
				<div class="navAlign">
					<ul class="listFormat">
						<li>
							<a href="galleryHome.html">Home</a>
						</li>
						<li>
							<div class="navDropDown"> 
							<button class="dropButton">My Favorite</button>
								<div class="dropDownContent">
									<a href="LabradorRetriever.html">Labrador Retriever</a> <!-- clickable link -->
									<a href="Pomeranian.html">Pomeranian</a>
									<a href="Pug.html">Pug</a>
							</div>
						</li>
						<li>
							<a href="contactUs.html">Contact Us</a>
						</li>
					</ul>
				</div>
			</nav>
			<hr>
		</header>
		<h3>Account Registration Form</h3>
		<p>All fields are required</p>
		<form action="registration.php" method="POST">
			<strong>UserID:</strong> <input type="text" name="id" placeholder="Enter your userID" value="<?php echo (isset($id) ? $id : "");?>">
			<span><?php echo (empty($idError) ? "" : $idError);?></span><br/><br/>
			<strong>Password:</strong> <input type="password" name="password" placeholder="Enter your password" value="">
			<span><?php echo (empty($passwordError) ? "" : $passwordError);?></span><br/><br/>
			<strong>Email:</strong> <input type="email" name="email" placeholder="Enter your email" value="<?php echo (isset($email) ? $email : "");?>">
			<span><?php echo (empty($emailError) ? "" : $emailError);?></span><br/><br/>
			<strong>Name:</strong> <input type="text" name="name" placeholder="Enter your name" value="<?php echo (isset($name) ? $name : "");?>">
			<span><?php echo (empty($nameError) ? "" : $nameError);?></span><br/><br/>
			<strong>Age:</strong> <input type="number" name="age" placeholder="Enter your age" value="">
			<span><?php echo (empty($ageError) ? "" : $ageError);?></span><br/><br/>
			<input type="submit" name="submit" value="Submit"><br/>
		</form>
		<p>
			<?php
				if (isset($message) && $message !== "")
					echo "ERROR: ".htmlspecialchars($message);
			?>
		</p>
		<hr>
		<h1>Information Retrieval Form</h1>
		<form action="retrieval.php" method="POST">
			<strong>UserID:</strong> <input type="text" name="id" placeholder="Enter your userID" value="<?php echo (isset($id) ? $id : "");?>">
			<span><?php echo (empty($idError) ? "" : $idError);?></span><br/><br/>
			<strong>Password:</strong> <input type="password" name="password" placeholder="Enter your password" value="">
			<span><?php echo (empty($passwordError) ? "" : $passwordError);?></span><br/><br/>
			<input type="submit" name="submit" value="Submit"><br/>
		</form>
		<footer class="footer">
			<p>Copyright &copy; 2020</p>
		</footer>
	</body>
</html>
<?php
	function convertHTML($data) {
		return htmlspecialchars($data);
	}
	
	$id = $password = $email = $name = $age = "";
	$idError = $passwordError = $emailError = $nameError = $ageError = "";
	$isError = False;
	
	if ($_SERVER["REQUEST_METHOD"] === "POST") {
		if (empty($_POST["id"])) {
			$idError = "*UserID is required";
			$isError = True;
		}
		else
			$id = convertHTML($_POST["id"]);
	
		if(empty($_POST["password"])) {
			$passwordError = "*Password is required";
			$isError = True;
		}
		else
			$password = convertHTML($_POST["password"]);
		
		if(empty($_POST["email"])) {
			$emailError = "*Email is requried";
			$isError = True;
		}
		else {
			$email = convertHTML($_POST["email"]);
			if (!filter_var($email, FILTER_VALIDATE_EMAIL))
				$emailError = "*Invalid email format";
		}
		
		if(empty($_POST["name"])) {
			$nameError = "*Name is required";
			$isError = True;
		}
		else {
			$name = convertHTML($_POST["name"]);
			if (!preg_match("/^[a-zA-Z ]*$/",$name))
				$nameError = "*Only letters and white space are allowed";
		}
		
		if(empty($_POST["age"])) {
			$ageError = "*Age is required";
			$isError = True;
		}
		else
			$age = convertHTML($_POST["age"]);
	}
	
	$year = date("Y") - $age;
	$message = "Welcome! ".$name.", thank you for joining us.\nYour year of birth is ".$year.".";
	$filename = "log_".date("Y")."_".date("m")."_".date("d").".csv";
	$file = fopen($filename, "a");
	$numRows = count(file($filename));
	$formData = array("Number" => $numRows, "UserID" => $id,
					  "Password" => $password, "Email" => $email,
					  "Name" => $name, "Age" => $age);
	fprintf($file, chr(0xEF).chr(0xBB).chr(0xBF));
	fputcsv($file, $formData);
	fclose($file);
	if($isError) {
		$message = "One or more fields is/are mising!";
		include("accountRegistration.php");
		exit(0);
	}
	else {
		include("registrationSuccessful.php");
		exit(0);
	}
?>
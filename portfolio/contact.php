<?php include 'contact-index.php' ?>


<?php if (isset($_POST['submit'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];
		$to = 'aleksandras.petro1@gmail.com';


		// connecting to database
		$host = 'localhost';
		$dbusername = 'root';
		$dbpassword = '';
		$dbname = 'messages';

		$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

		if (mysqli_connect_error()) {
			die('connect error ('.mysqli_connect_errno().')'.mysqli_connect_error());
		}else {
			$sql = "INSERT INTO user (name, mail, subject, message)
			values ('$name','$email','$subject','$message')";
			if ($conn->query($sql)) {
				echo 'New user is inserted successfully';
			}else {
				echo 'Error';
			}
			$conn->close();
		}

		// The mysqli_connect_errno() ->	Returns an error code value. Zero if no error occurred

		$encoding = "utf-8";

// Preferences for Subject field
		$subject_preferences = array(
				"input-charset" => $encoding,
				"output-charset" => $encoding,
				"line-length" => 76,
				"line-break-chars" => "\r\n"
		);

		// Mail header
		$header = "Content-type: text/html; charset=".$encoding." \r\n";
		$header .= "From:  <".$email."> \r\n";
		$header .= "MIME-Version: 1.0 \r\n";
		$header .= "Content-Transfer-Encoding: 8bit \r\n";
		$header .= "Date: ".date("r (T)")." \r\n";
		$header .= iconv_mime_encode("Subject", $subject, $subject_preferences);


		$body = "From: $name\n E-Mail: $email\n Message:\n $message";

		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}

		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}

		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		}

// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage) {
	if (mail($to, $subject, $body, $header)) {
		$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
	}
}
	}
?>

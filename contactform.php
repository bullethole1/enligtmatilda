<?php
    header("Location: http://enligtmatilda.se/kontakt.html");
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$human = intval($_POST['human']);
		$from = 'Contact Form';
		$to = 'info@enligtmatilda.se';
		$subject = 'GRLPWR Enligt Matilda ';

		$body = "From: $name\n E-Mail: $email\n Message:\n $message";
        echo "inne iallafall";
		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Var vänlig ange för och efternamn';
			echo 'Var vänlig ange för och efternamn';
		}
        
		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Var vänlig och ange en giltig email adress!';
			echo 'Var vänlig och ange en giltig email adress!';
		}
        
		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Var vänlig skriv in ett meddelande';
			echo 'Var vänlig skriv in ett meddelande';
		}
		
		//Check if simple anti-bot test is correct
		if ($human != 5) {
			$errHuman = 'Ditt anti-spam är ej korrekt';
			echo 'Ditt anti-spam är ej korrekt';
		}

// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Tack så mycket för ditt meddelande. Du kommer höra av mig snart!</div>';
		echo '<div class="alert alert-danger">Det uppstod ett fel när meddelandet skickades, försök igen senare</div>';
	} else {
	    echo "innan inne i sista elsen";
		$result='<div class="alert alert-danger">Det uppstod ett fel när meddelandet skickades, försök igen senare</div>';
		echo '<div class="alert alert-danger">Det uppstod ett fel när meddelandet skickades, försök igen senare</div>';
	}
}
	}
	die();
?>
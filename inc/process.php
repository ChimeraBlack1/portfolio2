<?php 

$errors = array(); // array to hold validation errors
$data 	= array(); // array to pass back data


	//validate the variables
		// if any of these variables don't exist, add error to our $errors array

	if(empty($_POST['name'])) {
		$errors['name'] = 'Name is required.';
	} else {
        $name = test_input($_POST["name"]);
        if(!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $errors["name"] = "Only letters and white space allowed.";
        }
    }

	if (empty($_POST['email'])) {
		$errors['email'] = 'Email is required';
	} else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors["email"] = "Invalid email format";
        }
    }

	if (empty($_POST['subject'])) {
		$errors['subject'] = 'Subject is required';	
	}else {
        $subject = test_input($_POST["subject"]);
    }

	if (empty($_POST['message'])) {
		$errors['message'] = 'Message is required';
	}else {
        $message = test_input($_POST["message"]);
    }

	//return a response
		// if there are any errors in our errors array then return a success boolean of false

	if (!empty($errors)) {
		$data['success'] = false;
		$data['errors'] = $errors;
	} else {
		$data['success'] = true;
		$data['message'] = 'Success!';
		
		$to = "christopherparke@zoho.com";
        $from = $email;
        $headers = "From:". $from;
		
		include "conn.php";
		
		try {
			mail($to,$subject,$message,$headers);	
		}catch (Exception $e) {
			$data["message"] = $e;
		}

	}

	//return all our data to an AJAX call

	echo json_encode($data);

function test_input($data) {
	return htmlspecialchars(stripslashes(trim($data)));
}


?>
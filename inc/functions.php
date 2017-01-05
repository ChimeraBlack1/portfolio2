<?php 
//define variables and set to empty values
$nameErr = $emailErr = $subjectErr = $messageErr = "";
$name = $email = $subject = $message = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])){
        $nameErr = "Name is required";
    }else {
        $name = test_input($_POST["name"]);
        if(!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameErr = "Only letters and white space allowed.";
        }
    }
    
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    }else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }
    
    if (empty($_POST["subject"])) {
        $subjectErr = "Subject is required";
    }else {
        $subject = test_input($_POST["subject"]);
    }
    
    if (empty($_POST["message"])) {
        $messageErr = "a Message is required";
    }else {
        $message = test_input($_POST["message"]);    
    }
    
    //send email if there are no error messages
    if($nameErr == "" && $emailErr == "" && $subjectErr == "" && $messageErr == "") {
        $to = "onlythebest@christopherparke.com";
        $from = $email;
        $headers = "From:". $from;
        $emailSuccess = "Message Sent!";
        
        mail($to,$subject,$message,$headers);
        echo $emailSuccess;
    }
}

function test_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}




?>
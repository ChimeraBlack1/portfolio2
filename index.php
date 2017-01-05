<?php 
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
      
        //define variables and set to empty values
        $nameErr = $emailErr = $subjectErr = $messageErr = "";
        $name = $email = $subject = $message = "";
        $array = array();


        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"])){
                $nameErr = "Name is required";
                $array["name"] = $nameErr;
            }else {
                $name = test_input($_POST["name"]);
                if(!preg_match("/^[a-zA-Z ]*$/", $name)) {
                    $nameErr = "Only letters and white space allowed.";
                    $array["name"] = $nameErr;
                }
            }

            if (empty($_POST["email"])) {
                $emailErr = "Email is required";
                $array["email"] = $emailErr;
            }else {
                $email = test_input($_POST["email"]);
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailErr = "Invalid email format";
                    $array["email"] = $emailErr;
                }
            }

            if (empty($_POST["subject"])) {
                $subjectErr = "Subject is required";
                $array["subject"] = $subjectErr;
            }else {
                $subject = test_input($_POST["subject"]);
            }

            if (empty($_POST["message"])) {
                $messageErr = "a Message is required";
                $array["message"] = $messageErr;
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
        
        echo json_encode($array);
  
        exit(200);
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Portfolio Template</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">

    <!-- Your custom styles (optional) -->
    <link href="css/main.css" rel="stylesheet">

</head>

<body id="top" onscroll="ScrollingNavbar()">
    

    <!-- Start project here-->
        <?php include 'inc/functions.php'?>
        <?php include 'inc/nav.php' ?>
        <?php include 'inc/header.php'?>
        <?php include 'inc/about.php' ?>
        <?php include 'inc/quote.php' ?>
        <?php include 'inc/skills.php' ?>
        <?php include 'inc/gallery.php' ?>
        <?php include 'inc/contact.php' ?>
        <?php include 'inc/footer.php'?>
    <!-- /Start project here-->


    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/tether.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    
    <!-- My Javascript -->
    <script type="text/javascript" src="app.js"></script>

</body>

</html>
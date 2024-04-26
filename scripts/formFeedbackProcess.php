<?php
session_start();
$secure = $_SESSION['SECURE'];
if ($secure != "!@#$^%FDSSFDWQR") {
    die('SECURE test failed.');
}
// $origin = $_SESSION['ORIGIN'];
// if ($origin != "/~u59/funky_donuts3/pages/feedback_form.php") {
//     die('ORIGIN test failed.');
// }

$salutation = $firstName = $lastName = "";
$email = $phoneNumber = "";
$subject = $message = "";

if ($_SERVER[ "REQUEST_METHOD" ] =="POST") {

    $salutation = sanitized_input($_POST["salutation"]);
    $firstName = sanitized_input ($_POST["firstName"]);
    if (!preg_match("/^\s*[A-Z][A-Za-z-]*\s*$/", $firstName)) {
        die("Bad first name!");
    }

    $lastName = sanitized_input($_POST ["lastName"]);
    if (!preg_match("/^[A-Z][A-Za-z -]*$/", $lastName)) {
        die("Bad last name!");
    }

    $email = sanitized_input($_POST["email"]);
    if (!preg_match("/^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.[A-Za-z]{2,3})$/",$email)) {
        die("Bad e-mail!");
    }

    $phoneNumber = sanitized_input($_POST['phone']);
    $phoneNumber = !empty ($_POST['phone']) ? $_POST['phone'] : "Not given";
    if (!empty($_POST['phone']) && !preg_match("/^(\d{3}-)?\d{3}-\d{4}$/", $phoneNumber)) {
        die("Bad phone number!");
    }

    $subject = sanitized_input($_POST["subject"]);
    $message = sanitized_input($_POST['message']);
    
}

function sanitized_input($data) {
    $data = trim($data); 
    $data = stripslashes($data); 
    $data = htmlspecialchars($data); 
    return $data;
}

//step 1
$messageToBusiness = 
    "From: $salutation $firstName $lastName\r\n".
    "E-mail address: $email\r\n".
    "Phone number: $phoneNumber\r\n".
    "--------------------------------\r\n".
    "Subject: $subject\r\n".
    "--------------------------------\r\n".
    "$message\r\n".
    "================================\r\n";

//now send email feedback message to the business
$headerToBusiness = "From: $email\r\n";
mail("u50@mail.cs.smu.ca", $subject, $messageToBusiness, $headerToBusiness);

//step 2
//Contruct an email confirmation for the client
$messageToClient = 
    "Dear $salutation $lastName:\r\n".
    "The following message was received from you by Funky Donuts\r\n".
    "================================\r\n".
    $messageToBusiness.
    "Thank you for your intrest and your feedback\r\n".
    "from the folks at Funky Donuts\r\n".
    "================================\r\n";

if(isset($_POST['reply'])) {
    $messageToClient .= "P.S. We will contect you shortly with more information.";
}

//now send the above-constructed e-mail conformation message to the client
$headerToClient = "u50@mail.cs.smu.ca\r\n";
mail($email, "Re: $subject", 
    $messageToClient, $headerToClient);


//step 3
//transform the confirmation message to the client to HTML5 format
$display = str_replace("\r\n", "\r\n<br>", $messageToClient);
$display = "<!DOCTYPE html>".
    "<html lang='en'>".
    "<head><meta charset='utf-8'><title>Your Message</title></head>".
    "<body><code>$display</code></body>".
    "</html>";
echo $display;


    //step 4
    //transform the feedback information in data/feedback.txt on the web server.

    $fileVar = fopen("data/feedback.txt", "a")
        or die("Error: Could not open the log file");
    fwrite($fileVar,
        "\n------------------------------------------------------------\n")
        or die("Error: Could not write divider to the log file.");
    fwrite($fileVar, "Date received: ".date("jS \of F, Y \a\\t H:i:s\n")) 
        or die("Error: Could not write date to the log file.");
    fwrite($fileVar, $messageToBusiness)
        or die ("Error: Could not write message to the log file.");

?>
    



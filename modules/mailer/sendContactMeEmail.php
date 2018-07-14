<?php

include_once($_SERVER['DOCUMENT_ROOT'].'/helpers/mailer.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/config/mail.php');

if(isset($_REQUEST)) {
    $name     = $_POST['name'];
    $email    = $_POST['email'];
    $comments = $_POST['comments'];

    if(trim($name) == '') {
        echo json_encode([
            "status" => "fail",
            "message" => "You must enter your name",
            "field" => "name"
        ]);
        exit();
    } else if(trim($email) == '') {
        echo json_encode([
            "status" => "fail",
            "message" => "Please enter a valid email address.",
            "field" => "email"
        ]);
        exit();
    } else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode([
            "status" => "fail",
            "message" => "You have entered an invalid e-mail address. Please try again.",
            "field" => "email"
        ]);
        exit();
    }
    if(trim($comments) == '') {
        echo json_encode([
            "status" => "fail",
            "message" => "Please enter your message.",
            "field" => "comments"
        ]);
        exit();
    }
    if(get_magic_quotes_gpc()) {
        $comments = stripslashes($comments);
    }
    
    $subject = 'You have been contacted by ' . $name . '.';
    $content = wordwrap("You have been contacted by $name. Their additional message is as follows.<br><br> \"$comments\"<br><br> You can contact $name via email, $email", 70);

    $mailerObj = new Mailer();
    $mailerObj->sendEmail(MAIL_FROM, $subject, $content);
}

?>
<?php

class Mailer {

    protected $from, $username, $password, $header;
                
    public function __construct() {
        include_once($_SERVER['DOCUMENT_ROOT'].'/config/mail.php');

        $this->from = MAIL_FROM;
        $this->username = MAIL_USERNAME;
        $this->password = MAIL_PASSWORD;

        $this->headers = "From: $this->from" . PHP_EOL;
        $this->headers .= "Reply-To: $this->from" . PHP_EOL;
        $this->headers .= "MIME-Version: 1.0" . PHP_EOL;
        $this->headers .= "Content-type: text/html; charset=utf-8" . PHP_EOL;
        $this->headers .= "Content-Transfer-Encoding: quoted-printable" . PHP_EOL;
    }

    public function sendEmail($to, $subject, $message, $cc = null, $bcc = null) {
        if(mail($to, $subject, $message, $this->headers)) {
            // Email has sent successfully, echo a success page
            echo json_encode([
                "status" => "success",
                "message" => "It won't take much time to revert back!"
            ]);
        } else {
            echo json_encode([
                "status" => "fail",
                "message" => "Sorry! I am unable to serve you now.",
                "field" => "unknown"
            ]);
        }
    }
}

?>
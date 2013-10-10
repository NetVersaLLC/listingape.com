<?php
include '/usr/local/sendgrid-php/SendGrid_loader.php';
session_start();
$first_name = "";
$last_name = "";
$phone = "";
$email = "";
$comments = "";

$first_name          = $_POST['first_name'];
$last_name           = $_POST['last_name'];
$phone               = $_POST['phone'];
$email               = $_POST['email'];
$comments            = $_POST['comments'];


$to = 'webform@listingape.com';
$from = $email;
$subject = 'Listingape (WEB LEAD)';
$message = "Full Name: " . $first_name." ".$last_name . "<br />Email: " . $email . "<br />Phone: " . $phone . "<br />Comments: " . $comments;
$message = '<html><body>' . $message . '</body></html>';

if(send_mail($to, $from, $subject, $message, $message, $first_name, null, $bcc)) {
    header("Location: contact_us.php?m=failed");
} else {
    header("Location: contact_us.php?m=success");
}


function send_mail($to, $from, $subject, $plain_message, $html_message=null, $from_name=null, $to_name=null, $bcc=array(), $additional_headers = array(), $reply_to=null) {
    if(!$reply_to)  $reply_to = $from;
    if(!$from_name || !is_string($from_name))
        $from_name = '';
    $random_hash = md5(date('r', time()));

    $headers = array();
    if($from_name && $from_name!='')
        $headers[] = "From: {$from_name} <" . strip_tags($from) . ">";
    else
        $headers[] = "From: " . strip_tags($from);
    if($to_name && $to_name!='')
        $headers[] = "To: {$to_name} <" . strip_tags($to) . ">";
    else
        $headers[] = "To: " . strip_tags($to);
    if(is_array($bcc) && sizeof($bcc)>0)
        $headers[] = "Bcc: " . implode(", ", $bcc);
    $headers[] = "Reply-To: " . strip_tags($reply_to);
    if(is_array($additional_headers) && sizeof($additional_headers)>0)
        $headers = array_merge($headers, $additional_headers);
    if($html_message) {
        $headers[] = "MIME-Version: 1.0";
        $headers[] = "Content-Type: text/html; charset=iso-8859-1";
    } else {
        $headers[] = "Content-Type: text/plain; charset=iso-8859-1";
    }
    $headers[] = "X-Priority: 1";
    $headers[] = "X-Mailer: PHP/" . phpversion();

    $plain_message = strip_tags(str_ireplace(array('<br/>', '<br>'), '\n', $plain_message));
    $html_message = str_ireplace(array('\r\n', '\n'), '<br>', $html_message);

    $mail_headers = implode("\r\n", $headers);
    $mail_message = ($html_message && $html_message!='') ? $html_message : $plain_message;

    $sendgrid = new SendGrid('jamesdouglas', 'crowdGr1p');
    $mail = new SendGrid\Mail();
    $mail->addTo($to)->
	    setFrom($from)->
	    setSubject($subject)->
	    setText($plain_message)->
	    setHtml($html_message);
    $sendgrid->smtp->send($mail);
    # $mail_sent = @mail($to, $subject, $mail_message, $mail_headers);
    return $mail_sent;
}

?>
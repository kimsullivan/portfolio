<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: kimberlyksullivan.com'; 
    $to = 'kimberlyksull@gmail.com'; 
    $subject = 'Email Inquiry';

    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
?>

<?php
if ($_POST['submit']) {
    if (mail ($to, $subject, $body, $from)) {
echo ‘

Thank you for your email!

‘;
} else {
echo ‘

Oops! An error occurred. Try sending your message again.

‘;
}
}
?>
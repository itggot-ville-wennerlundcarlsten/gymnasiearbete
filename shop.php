// denna ska fungera enligt php.net
<?php
$subject = 'Nested Beställning';
$message = $_POST['message'];

if($_POST) {
mail('ville.wennerlundcarlsten@itggot.se', $subject, $message);
}
?>


// och denna ska fungera enligt någon kille på youtube
<?php
$to = 'ville.wennerlundcarlsten@itggot.se';
$subject = 'Nested beställning';

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$body = <<<EMAIL

Namn: $name

Emailadress: $email

Meddelande: $message

EMAIL;

$header = '$email';

if($_POST){
    mail($to, $subject, $message, $header);
}
?>
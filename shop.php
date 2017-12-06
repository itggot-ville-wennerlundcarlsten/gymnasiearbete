<?php

$name = $_POST['name'];
$subject = 'Nested Beställning: ' . $name;
$email =  $_POST['email'];
$message = $_POST['message'];
$tel = $_POST['tel'];

$body = <<<EMAIL
Namn: $name

Emailadress: $email

Meddelande: $message

Telefonnummer: $tel

EMAIL;


echo "Processing";
if($_POST) {
mail('ville.wennerlundcarlsten@itggot.se', $subject, $body);
mail('karim.omarain@itggot.se', $subject, $body);
echo "Mail sent";
}

header("location: /shop.html");
die();
?>


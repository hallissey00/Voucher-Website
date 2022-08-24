<?php

$name = $_GET['name'];
$email = $_GET['email'];
$mailTo = $_GET['email'

$subject = "Your Giftcard Voucher Number is";

mail($mailTo, $subject);

echo "Thank You for your payment ".$name;

echo "<br/>Your giftcard voucher has been sent to ".$email;

?>
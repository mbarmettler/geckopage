<?php

if($_POST)
{
    $name = $_POST['form_name'];
    $email = $_POST['form_email'];
    $message = $_POST['form_msg'];

	//send email
    mail("greenlion1010@gmail.com", "GeckoPage Contact Form - by: " .$email, $message);
}
?>

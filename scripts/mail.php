<?php

if(isset($_POST['submit']))
{
    $name = $_POST['firstName'] +" " + $_POST['lastName'];
    $email = $_POST['email'];
    $message = $_POST['msgContent'];

	//send email
    mail("greenlion1010@gmail.com", "GeckoPage Contact Form - by: " .$email, $message);
}
?>

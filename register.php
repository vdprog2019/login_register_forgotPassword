<?php
ini_set( 'display_errors', 1 );

error_reporting( E_ALL );

$from = "vdphoto77@gmail.com";

$to = "$_GET[email_php]"; //надо ввести email

$subject = "Checking PHP mail";

$message = "PHP mail works just fine";

$headers = "From:" . $from;

mail($to,$subject,$message, $headers);

echo "The email message was sent.";


$e = $_GET["email_php"];
$p = $_GET["password_php"];
$s = $_GET["second_password_php"];

echo "<table>
    <tr><td>email</td><td>$e</td></tr> 
    <tr><td>password</td><td>$p</td></tr> 
    <tr><td>second password</td><td>$s</td></tr> 
</table>
";



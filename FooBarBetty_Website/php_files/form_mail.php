<?php
/*----------------------------------------------------------------------------
Author:     Elisabete Vail 
Date:     	September 14, 2014
Project:    Use PHP to send emails from HTML contact form
----------------------------------------------------------------------------*/
$to = "betty@foobarbetty.com";
$subject = "An email from the FooBar Betty website";

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$headers = "From: " . $email;

$body = "From: $name\nE-Mail: $email\n\n$message";

if ($_POST['submit']) {

      if (mail($to, $subject,$body,$headers)) {
        print '<script type="text/javascript">';
        print 'alert("Thank you! I look forward to receiving your message!")';
        print '</script>';
      } else {
          print '<script type="text/javascript">';
          print 'alert("Oops, Something went wrong! Please try again.")';
          print '</script>';
        }
} 

 $url = 'http://foobarbetty.com';
 echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">'
?>
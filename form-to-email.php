<?php
if(!isset($_POST['submit']))
{
	//This page should not be accessed directly. Need to submit the form.
	//echo "error; you need to submit the form!";
}
//$selectOption = $_POST['Industry'];
$name = $_POST['Name'];
$visitor_email = $_POST['Designation'];
$message = $_POST['message'];
$designation = $_POST['Designation'];
$organization = $_POST['Organization'];
$employees = $_POST['Employees'];
$industry = $_POST['Industry'];
$write = $_POST['Write'];


//Validate first
if(empty($name)||empty($visitor_email)) 
{
    echo "Name and email are mandatory!";
    exit;
}

if(IsInjected($visitor_email))
{
    echo "Bad email value!";
    exit;
}

$email_from = 'anil@mindrose.com';//<== update the email address
$email_subject = "Contact Form: Mindrose";
$email_body ="Name: $name.\n".
"Designation: $designation.\n".
"Organization: $organization.\n".
"Number of employees: $employees.\n".
"Industry: $industry.\n".
"What got you interested in us: $write.\n".
//    "Here is the message:\n $message".
    
$to = "anil@mindrose.com";//<== update the email address
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
//Send the email!
mail($to,$email_subject,$email_body,$headers);
//done. redirect to thank-you page.
header('Location: thank-you.html');


// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}
   
?> 
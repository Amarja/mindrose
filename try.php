//<html>
//<head><title>Amit4 php</title></head>
//<body>
//
//<?php
//  	# operator
//	print "<h2>php program to add two numbers...</h2><br />";
//$val1 = 20;
//$val2 = 20;
//$sum = $val2 + $val2;   /* Assignment operator */
//echo "Result(SUM): $sum";
//?>
//
//</body>
//</html>


//<?php
//$errors = '';
//$myemail = 'shiwangi@iternia.com';
//if(empty($_POST['name'])  ||
//   empty($_POST['email']) ||
//   empty($_POST['message']))
//{
//    $errors .= "\n Error: all fields are required";
//}
//$name = $_POST['name'];
//$email_address = $_POST['email'];
//$message = $_POST['message'];
//if (!preg_match(
//"/ ^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i",
//$email_address))
//{
//    $errors .= "\n Error: Invalid email address";
//}
//if( empty($errors))
//{
//    $to = '$myemail';
//    $email_subject = "Contact form submission: $name";
//    $email_body = "You have received a new message. ".
//        " Here are the details:\n Name: $name \n ".
//        "Email: $email_address\n Message \n $message";
//    $headers = "From: $myemail\n";
//    $headers .= "Reply-To: $email_address";
//    mail($to,$email_subject,$email_body,$headers);
//    //redirect to the 'thank you' page
//    header('Location: contact-form-thank-you.html');
//}
//?>

<?php
//if "email" variable is filled out, send email
  if (isset($_REQUEST['email']))  {

  //Email information
  $admin_email = "shiwangi@iternia.com";
  $email = $_REQUEST['email'];
  $subject = $_REQUEST['subject'];
  $comment = $_REQUEST['comment'];

  //send email
  mail($admin_email, "$subject", $comment, "From:" . $email);

  //Email response
  echo "Thank you for contacting us!";
  }

  //if "email" variable is not filled out, display the form
  else  {
?>

 <form method="post">
  Email: <input name="email" type="text" /><br />
  Subject: <input name="subject" type="text" /><br />
  Message:<br />
  <textarea name="comment" rows="15" cols="40"></textarea><br />
  <input type="submit" value="Submit" />
  </form>

<?php
  }
?>
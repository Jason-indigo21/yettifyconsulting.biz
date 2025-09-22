<?php

$firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_STRING);
$lastname = filter_var($_POST['lastname'],FILTER_SANITIZE_STRING);
$phoneno = filter_var($_POST['phoneno'],FILTER_SANITIZE_STRING);
$clientEmail = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
$message = filter_var($_POST['message'],FILTER_SANITIZE_STRING);
$captcha = filter_var($_POST['captcha'],FILTER_SANITIZE_STRING);
$companyName= "Yettify Consulting Group";

$subject = 'Inquiry  - ' . $firstname . ' ' . $lastname . ' - ' . $email;

$formContent = "<b>Firstname: </b>" . $firstname .
 "<br><b>Lastname: </b>" . $lastname .
  "<br><b>Phone Number: </b>" . $phoneno .
  "<br><b>Email: </b>" . $clientEmail .
  "<br><b>Message: </b>" . $message;

$data = json_encode($formContent);
$subjectJson = json_encode($subject);

$some_data = '{
  "From":"itservices@yettifyconsulting.biz",
  "To": "itservices@yettifyconsulting.biz",
  "Subject": ' . $subjectJson . ',
  "HtmlBody": ' . $data . ',
  "MessageStream": "outbound"
}';


$toSenderEmail = '{
  "From":"itservices@yettifyconsulting.biz",
  "To": "' . $clientEmail . '",
  "Subject": "We have received your email!",
  "HtmlBody": "Hi ' . $firstname . ' , <br><br> Your email has been received and as soon as an agent is available they will contact you. <br><br> Regards, </br>'.$companyName.'  ",
  "MessageStream": "outbound"
}';

if($captcha) {
$cSession = curl_init();
// Step 2
curl_setopt($cSession, CURLOPT_URL, "https://api.postmarkapp.com/email");
curl_setopt($cSession, CURLOPT_RETURNTRANSFER, true);

curl_setopt($cSession, CURLOPT_HTTPHEADER, array('Accept: application/json', 'Content-Type: application/json', 'X-Postmark-Server-Token:0eff8107-c3f8-47d9-bf00-ea7299b60151'));

curl_setopt($cSession, CURLOPT_POSTFIELDS, $some_data);

curl_setopt($cSession, CURLOPT_HEADER, false);
// Step 3
$result = curl_exec($cSession);
// Step 4
curl_close($cSession);
// Step 5
// echo $some_data;

if ($result) {
  // echo $result;
  curl_setopt($cSession, CURLOPT_URL, "https://api.postmarkapp.com/email");
  curl_setopt($cSession, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($cSession, CURLOPT_HTTPHEADER, array('Accept: application/json', 'Content-Type: application/json', 'X-Postmark-Server-Token:0eff8107-c3f8-47d9-bf00-ea7299b60151'));
  curl_setopt($cSession, CURLOPT_POSTFIELDS, $toSenderEmail);
  curl_setopt($cSession, CURLOPT_HEADER, false);
  curl_exec($cSession);
  curl_close($cSession);

  header("Location: ./?page=lets-talk&email-sent=success");

} else {
  header("Location: ./?page=lets-talk&email-sent=failed");
  //   echo "Error: " . curl_error($cSession) . " ";
}

}else{
  header("Location: ./?page=lets-talk&email-sent=failed");
}
// echo "Success";
?>
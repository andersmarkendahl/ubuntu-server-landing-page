<?php
$servername = "localhost";
$dbname = "danDB";

try {
  $username = $_POST["username"];
  $password = $_POST["password"];
  $remove = $_POST["remove"];

  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "DELETE FROM person WHERE $remove";

  $conn->exec($sql);
  echo "<p style=\"color:white;\">PASSED: Person deleted</p>";

} catch(PDOException $e) {
  echo "<p style=\"color:white;\">FAILED: " . $e->getMessage() . "</p>";
}
?>

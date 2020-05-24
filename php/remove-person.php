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
  echo "Person deleted successfully\n";

} catch(PDOException $e) {
  echo "Deletion of person failed:\n" . $e->getMessage();
  echo "\n";
}
?>
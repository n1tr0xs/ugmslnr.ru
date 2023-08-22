<?
$conn = new mysqli("ugmslnr", "sinop", "sinop");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
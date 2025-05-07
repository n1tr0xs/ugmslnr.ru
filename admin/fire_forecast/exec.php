<?
require $_SERVER['DOCUMENT_ROOT'] . '/requires/funcs.php';

$img_path = $_SERVER['DOCUMENT_ROOT'] . "/updatable/fire_danger.png";
$result = move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $img_path);
echo "<p>Карта " . ($result ? "" : "не ") . "загружена.</p>";

$conn = connect("visiter", "visiter_ugms");
$start = $conn->real_escape_string($_POST['start']);
$end = $conn->real_escape_string($_POST['end']);
$desc = $conn->real_escape_string($_POST['desc']);

$sql = "
replace into `ugmslnr`.`fire_forecast` values
(NULL, '$start', '$end', '$desc')
";

exec_result($sql);
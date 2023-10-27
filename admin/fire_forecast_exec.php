<?
include $_SERVER['DOCUMENT_ROOT'] . '/includes/funcs.php';
$password = $_POST['password'];
$conn = connect("editor", $password);

$start = $conn->real_escape_string($_POST['start']);
$end = $conn->real_escape_string($_POST['end']);
$desc = $conn->real_escape_string($_POST['desc']);

$sql = "
replace into `ugmslnr`.`fire_forecast` values
('$start', '$end', '$desc')
";

$ch = curl_init(($_SERVER['HTTPS'] ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . '/admin/result.php');
$ch_opts = [];
$ch_opts[CURLOPT_RETURNTRANSFER] = true;
$ch_opts[CURLOPT_POSTFIELDS] = [];
$ch_opts[CURLOPT_POSTFIELDS]['file'] = basename(__FILE__, '_exec.php');
$ch_opts[CURLOPT_POSTFIELDS]['resp'] = ($conn->query($sql) === TRUE);
curl_setopt_array($ch, $ch_opts);
echo curl_exec($ch);
?>
<?
include $_SERVER['DOCUMENT_ROOT'] . '/includes/funcs.php';
$password = $_POST['password'];
$conn = connect("editor", $password);

$img_path = $_SERVER['DOCUMENT_ROOT'] . "/updatable/fire_danger.png";

$ch = curl_init(($_SERVER['HTTPS'] ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . '/admin/result.php');
$ch_opts = [];
$ch_opts[CURLOPT_RETURNTRANSFER] = true;
$ch_opts[CURLOPT_POSTFIELDS] = [];
$ch_opts[CURLOPT_POSTFIELDS]['file'] = basename(__FILE__, '_exec.php');
$ch_opts[CURLOPT_POSTFIELDS]['resp'] = boolval(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $img_path));
curl_setopt_array($ch, $ch_opts);
echo curl_exec($ch);
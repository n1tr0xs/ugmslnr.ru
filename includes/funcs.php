<?
// MARK: prod / dev version comment	
// error_reporting(0);	

function connect($login, $password){
	$conn = new mysqli("ugmslnr", $login, $password);
	if ($conn->connect_error)
		return false;
	return $conn;
}

function get_arr($conn, $sql){
	if($conn === false)
		return false;
	$resp = $conn->query($sql);
	$arr = $resp->fetch_all(MYSQLI_ASSOC);
	return $arr;
}

function get_row($conn, $sql){
	if($conn === false)
		return false;
	$resp = $conn->query($sql);
	$row = $resp->fetch_assoc();
	return $row;
}

function get_files($folder, $ext='.pdf'){
	// reads files from folder and print them in table
	$dir = $_SERVER['DOCUMENT_ROOT'] . $folder;
	if (!is_dir($dir))
		return;
	$files = scandir($dir);	
	foreach($files as $file){
		if(strpos($file, $ext) !== false){
			yield $folder.$file => basename($file, $ext);
		}
	}
}
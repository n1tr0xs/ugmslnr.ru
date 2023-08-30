<?
// MARK: prod / dev version comment	
error_reporting(0);	

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

<?
// MARK: prod / dev version comment	
error_reporting(0);	

function connect($login, $password){
	$conn = new mysqli("ugmslnr", $login, $password);
	if ($conn->connect_error) {
		die("Не удалось соединиться с базой данных");
	}
	return $conn;
}

function get_arr($conn, $sql){
	$resp = $conn->query($sql);
	$arr = $resp->fetch_all(MYSQLI_ASSOC);
	return $arr;
}

function get_row($conn, $sql){
	$resp = $conn->query($sql);
	$row = $resp->fetch_assoc();
	return $row;
}

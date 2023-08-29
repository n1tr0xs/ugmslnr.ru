<?

function connect($login, $password){
	return (new mysqli("ugmslnr", $login, $password)) or die("Не удалось соединиться с базой данных");
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

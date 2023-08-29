<?

function connect($login, $password){
	$conn = new mysqli("ugmslnr", $login, $password);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
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

function print_table($arr){
	echo "<table>";
	foreach ($arr as $row) {
		echo "<tr>";
		foreach ($row as $key => $value)
			echo "<td>{$key}</td><td>{$value}</td>";
		echo "</tr>";
	}
	echo "</table>";
}
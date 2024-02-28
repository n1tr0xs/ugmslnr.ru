<?
// MARK: prod / dev version comment	
error_reporting(0);	

function connect($login, $password){
	$conn = new mysqli("127.0.0.1", $login, $password, "ugmslnr");
	return $conn;
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
			yield $folder.$file => $file;
		}
	}
}

function format_date($date){
	$date=explode("-", $date);
    switch ($date[1]){
        case 1: $m = 'января'; break;
        case 2: $m = 'февраля'; break;
        case 3: $m = 'марта'; break;
        case 4: $m = 'апреля'; break;
        case 5: $m = 'мая'; break;
        case 6: $m = 'июня'; break;
        case 7: $m = 'июля'; break;
        case 8: $m = 'августа'; break;
        case 9: $m = 'сентября'; break;
        case 10: $m = 'октября'; break;
        case 11: $m = 'ноября'; break;
        case 12: $m = 'декабря'; break;
    }
    return intval($date[2]).'&nbsp;'.$m.'&nbsp;'.$date[0].'&nbsp'.'года';
}

function exec_result($sql, $file){
    $conn = connect("editor", '9v~<\XRZ#*vvf');
    if($conn->query($sql) === TRUE){
        echo "Данные отправлены.";
    } else {
        echo "Ошибка отправки данных.<br> {$conn->error}<br>";
        echo "SQL: {$sql}";
    }
    echo "<br><a href='/admin/". basename($file, '_exec.php'). ".php'>Вернуться на страницу ввода </a>";
}
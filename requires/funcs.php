<?
// MARK: prod (0) / dev (1) version comment	
error_reporting(0);	// production
// error_reporting(1); // development

require 'credentials.php';

function connect($login, $password){
	$conn = new mysqli("127.0.0.1", $login, $password, "ugmslnr");
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
	// return files with given extension in given folder
	$dir = $_SERVER['DOCUMENT_ROOT'] . $folder;
	if (!is_dir($dir))
		return;
	foreach(scandir($dir) as $filename){
		if(strpos($filename, $ext) !== false){
			yield $filename;
		}
	}
}

function format_date($date){
	$date=explode("-", $date);
	$month_name = [
	    '01' => 'января',
        '02' => 'февраля',
        '03' => 'марта',
        '04' => 'апреля',
        '05' => 'мая',
        '06' => 'июня',
        '07' => 'июля',
        '08' => 'августа',
        '09' => 'сентября',
        '10' => 'октября',
        '11' => 'ноября',
        '12' => 'декабря',
	];
    return intval($date[2]).'&nbsp;'.$month_name[$date[1]].'&nbsp;'.$date[0].'&nbsp'.'года';
}

function exec_result($sql, $dir){
    $conn = connect($GLOBALS['LOGIN'], $GLOBALS['PASSWORD']);
    if($conn->query($sql) === TRUE){
        echo "<p>Данные отправлены.</p>";
    } else {
        echo "<p>Ошибка отправки данных.</p>";
        echo "<p>SQL: {$sql}</p>";
        echo "<p>Ошибка: {$conn->error}</p>";
    }
    $url = explode($_SERVER['SERVER_NAME'], $dir)[1];
    echo "<p><a href='{$url}/'>Вернуться на страницу ввода </a></p>";
}
<?
require $_SERVER['DOCUMENT_ROOT'] . '/requires/funcs.php';
$conn = connect("visiter", "visiter_ugms");


$sql = $_POST['sql'];

$data = get_arr($conn, $sql);

foreach($data as $row) {
    foreach($row as $key=>$val){
        echo $key.' => '.$val.'<br>';
    }
}
?>
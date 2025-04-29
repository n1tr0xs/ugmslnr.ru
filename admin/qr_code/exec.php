<?
require $_SERVER['DOCUMENT_ROOT'] . '/requires/funcs.php';
$conn = connect("visiter", "visiter_ugms");

$doc_type = $conn->real_escape_string($_POST["doc_type"]);
$doc_number = $conn->real_escape_string($_POST["doc_number"]);
$doc_date = $conn->real_escape_string($_POST["doc_date"]);
$doc_source = $conn->real_escape_string($_POST["doc_source"]);
$doc_receiver = $conn->real_escape_string($_POST["doc_receiver"]);
$doc_performer = $conn->real_escape_string($_POST["doc_performer"]);
$doc_signer = $conn->real_escape_string($_POST["doc_signer"]);
$doc_comment = $conn->real_escape_string($_POST["doc_comment"]);
$doc_hash = $conn->real_escape_string($_POST["doc_hash"]);

$sql = "
replace into `ugmslnr`.`qr_codes` values
(NULL, '$doc_type', '$doc_number', '$doc_date', '$doc_source', '$doc_receiver', '$doc_performer', '$doc_signer', '$doc_comment', '$doc_hash')
";

exec_result($sql);
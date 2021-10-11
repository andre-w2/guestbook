<?php 

$select = $db -> query("SELECT * FROM id");
$num = $db -> numRows($select);

if (!empty($_POST['save'])) {
	$select = $db -> query("SELECT * FROM id");

	if (!empty($_POST['name']) && !empty($_POST['msg'])) {
        $timeNow = time();
		
		$create = $db -> query("INSERT INTO id (name, msg, time) VALUES (?s, ?s, ?s)", $_POST['name'], $_POST['msg'], $timeNow);

		$select = $db -> query("SELECT * FROM id");

		$_SESSION['msg'] = 'Запись успешно сохранена!';
	}
}

?>

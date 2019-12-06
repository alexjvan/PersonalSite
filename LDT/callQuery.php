<?php
	include_once('DB.php');
	if($_POST['query']) {
		$q = $_POST['query'];
		$r = DB::query($q);
		echo json_encode($r);
	}
?>

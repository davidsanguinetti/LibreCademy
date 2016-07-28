<?php
	include_once 'handles/db_handler.php';

	echo json_encode(readTable("user"));

?>

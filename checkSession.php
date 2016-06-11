<?php
	require 'session.php';

	if(!isset($_SESSION["Email"])) {
		header("Location: login.php");
	}
?>
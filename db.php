<?php

define('DB_SERVER','localhost');
define('DB_SERVER_USERNAME','root');
define('DB_SERVER_PASSWORD','');
define('DB_DATABASE','sagar-auto-parts');


try {

    $db = new PDO("mysql:host=".DB_SERVER.";dbname=".DB_DATABASE, DB_SERVER_USERNAME, DB_SERVER_PASSWORD);
    // set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
    }
	catch(PDOException $e)
    {
		echo "Connection failed: " . $e->getMessage();
		exit();
    }
?>
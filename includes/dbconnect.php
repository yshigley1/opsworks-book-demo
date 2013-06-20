<?php

// CONNECT TO THE DATABASE
$DB_NAME = 'opsworks-book-demo';
$DB_HOST = '127.0.0.1';
$DB_USER = 'dbuser';
$DB_PASS = 'Pt58xDhNg_J-G7_HiSsy';
					
$mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
				
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

?>

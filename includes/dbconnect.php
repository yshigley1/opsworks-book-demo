<?php

// CONNECT TO THE DATABASE
$DB_NAME = 'opsworks_book_demo';
$DB_HOST = 'ec2-54-242-154-39.compute-1.amazonaws.com'; // CHANGE TO YOUR OPSWORKS MYSQL SERVER IP ADDRESS
$DB_USER = 'root'; // CHANGE TO root
$DB_PASS = '8ePO2O8E0UHG91975I3k'; // KEEP IN PLACE AS PER CHAPTER 4
					
$mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
				
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

?>

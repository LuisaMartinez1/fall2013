<?php
include_once('_password.php');

function GetConnection()
{
	global $sql_password;
	$conn = new mysqli('localhost', 'n02076294', $sql_password, 'n02076294_db');
	return $conn;
}

<?php
include_once('_password.php');
include_once __DIR__ . '/../Models/Keywords.php';
include_once __DIR__ . '/../Models/Users.php';
include_once __DIR__ . '/../Models/Addresses.php';
include_once __DIR__ . '/../Models/Emails.php';
include_once __DIR__ . '/../Models/PhoneNumbers.php';
include_once __DIR__ . '/../Models/UsersFeedBack.php';
include_once __DIR__ . '/../Models/WishList.php';
include_once __DIR__ . '/../Models/Categories.php';
include_once __DIR__ . '/../Models/Items.php';
include_once __DIR__ . '/../Models/ProductKeyWords.php';
include_once __DIR__ . '/../Models/Orders.php';



function GetConnection()
{
	global $sql_password;
	$conn = new mysqli('localhost', 'n02076294', $sql_password, 'n02076294_db');
	return $conn;
}
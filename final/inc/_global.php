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
include_once __DIR__ . '/../Models/CreditCard.php';
include_once __DIR__ . '/../Models/OrderItem.php';
include_once __DIR__ . '/../Models/Shipments.php';
include_once __DIR__ . '/../Models/Suppliers.php';
include_once __DIR__ . '/../Models/AddressTypes.php';
include_once __DIR__ . '/../Models/PhoneTypes.php';
include_once __DIR__ . '/../Models/EmailTypes.php';
include_once __DIR__ . '/../Models/ItemsSold.php';
include_once __DIR__ . '/../Models/Inventory.php';

function GetConnection()
{
	global $sql_password;
	$conn = new mysqli('localhost', 'n02076294', $sql_password, 'n02076294_db');
	return $conn;
}

function fetch_all($sql)
{
        $ret = array();
        $conn = GetConnection();
        $result = $conn->query($sql);
        
        while ($rs = $result->fetch_assoc()) {
                $ret[] = $rs;
        }
        
        $conn->close();
        return $ret;
}

function fetch_one($sql)
{
        $arr = fetch_all($sql);
        return $arr[0];
}

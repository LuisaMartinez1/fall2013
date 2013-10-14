<?php

/**
 * 
 */
class OrderItem{

	static public function Get()
	{
		$ret = array();
		$conn = GetConnection();
		$result = $conn->query('SELECT * FROM Fall2013_Order_Items');
		$result = $conn->query('SELECT
	U.id, O.`PurchaseNumber` as `Order`, I.`ItemName` as `Item`
		FROM
	Fall2013_Order_Items U
		join 
	Fall2013_Orders O on U.Orders_id = O.id
		join
	Fall2013_Items I on U.Items_id = I.id
		');

		while ($rs = $result->fetch_assoc()) {
		$ret[] = $rs;
		}

		$conn->close();
		return $ret;
	}

}
<?php

/**
 * 
 */
class Shipments {

	static public function Get()
	{
		$ret = array();
		$conn = GetConnection();
		$result = $conn->query('SELECT * FROM Fall2013_Shipments');
		$result = $conn->query('SELECT 
	U.id, ShipmentNumber, PI.`PurchaseNumber` as `Purchase`, A.`City` as `AddressCity`
		FROM
	Fall2013_Shipments U
		join
	Fall2013_Orders PI on U.Purchases_id = PI.id
		join
	Fall2013_Addresses A on U.Addresses_id = A.id');

		while ($rs = $result->fetch_assoc()) {
		$ret[] = $rs;
		}

		$conn->close();
		return $ret;
	}

}
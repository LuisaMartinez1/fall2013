<?php

/**
 * 
 */
class Suppliers {

	static public function Get()
	{
		$ret = array();
		$conn = GetConnection();
		$result = $conn->query('SELECT * FROM Fall2013_Supplier');
		$result = $conn->query('SELECT 
	U.id, SuplierName, SuperId, I.`ItemName` as `Item`
		FROM
	Fall2013_Supplier U 
		join
	Fall2013_Items I on U.Fall2013_Items_id = I.id');

		while ($rs = $result->fetch_assoc()) {
		$ret[] = $rs;
		}

		$conn->close();
		return $ret;
	}

}
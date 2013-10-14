<?php

/**
 * 
 */
class Orders {

	static public function Get()
	{
		$ret = array();
		$conn = GetConnection();
		$result = $conn->query('SELECT * FROM Fall2013_Orders');
		$result = $conn->query('SELECT 
    U.id, PurchaseNumber, PurchaseDate, Us.`LastName` as `User`, P.`Method` as `PaymentMethod`,PurchasedTotal
	FROM
    Fall2013_Orders U
        join
	Fall2013_Users Us on U.Users_id = Us.id 
		join 
	Fall2013_PaymentCreditCardTypes P on U.Fall2013_PaymentCreditCardTypes_id = P.id
		');

		while ($rs = $result->fetch_assoc()) {
		$ret[] = $rs;
		}

		$conn->close();
		return $ret;
	}

}
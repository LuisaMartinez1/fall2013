<?php

/**
 * 
 */
class CreditCard {

	static public function Get()
	{
		$ret = array();
		$conn = GetConnection();
		$result = $conn->query('SELECT * FROM Fall2013_PaymentCreditCardTypes');
		$result=$conn->query('SELECT 
    U.id, PurchaseNumber,PurchaseDate, Us.`LastName` as `User`, CT.`Method` as `PaymentMethod`,Amount
	FROM
    Fall2013_Orders U
        join
	Fall2013_Users Us on U.Users_id = Us.id 
		join 
	Fall2013_PaymentCreditCardTypes CT on U.Fall2013_PaymentCreditCardTypes_id = CT.id');

		while ($rs = $result->fetch_assoc()) {
		$ret[] = $rs;
		}

		$conn->close();
		return $ret;
	}

}

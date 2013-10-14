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
    U.id,CreditCardNumber,CreditCardHolderName,CreditExpirationDate,CreditSecurityCode, Us.`LastName` as `User`, Method
	FROM
    Fall2013_PaymentCreditCardTypes U
        join
	Fall2013_Users Us on U.Fall2013_Users_id = Us.id ');

		while ($rs = $result->fetch_assoc()) {
		$ret[] = $rs;
		}

		$conn->close();
		return $ret;
	}

}

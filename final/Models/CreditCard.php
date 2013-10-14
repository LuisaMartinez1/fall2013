<?php

/**
 * 
 */
class CreditCard{

	static public function Get()
	{
		$ret = array();
		$conn = GetConnection();
		$result = $conn->query('SELECT * FROM Fall2013_PaymentCreditCardTypes');

		while ($rs = $result->fetch_assoc()) {
		$ret[] = $rs;
		}

		$conn->close();
		return $ret;
	}

}

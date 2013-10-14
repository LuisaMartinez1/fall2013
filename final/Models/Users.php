<?php

/**
 * 
 */
class Users {

	static public function Get()
	{
		$ret = array();
		$conn = GetConnection();
		$result = $conn->query('SELECT * FROM Fall2013_Users');
		$result = $conn->query('SELECT 
    U.id,FirstName,LastName,K.`Name` as `KeyWord`, password
	FROM
    Fall2013_Users U
        join
	Fall2013_KeyWords K on U.KeyWords_id = K.id 
		');

		while ($rs = $result->fetch_assoc()) {
		$ret[] = $rs;
		}

		$conn->close();
		return $ret;
	}

}
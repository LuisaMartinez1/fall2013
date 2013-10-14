<?php

/**
 * 
 */
class Addresses {

	static public function Get()
	{
		$ret = array();
		$conn = GetConnection();
		$result = $conn->query('SELECT * FROM Fall2013_Addresses');
		$result = $conn->query('SELECT 
    U.id,Street,City,Country,State,ZipCode, US.`LastName` as `User`, AT.`AddressType` as `Type`, K.`Name` as `Keyword`
	FROM
    Fall2013_Addresses U
        join
	Fall2013_AddressTypes AT on U.AddressTypes_id = AT.id 
		join
	Fall2013_Users US on U.Users_id = US.id 
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
<?php
/**
 * 
 */
class PhoneNumbers{

	static public function Get()
	{
		$ret = array();
		$conn = GetConnection();
		$result = $conn->query('SELECT * FROM Fall2013_PhoneNumbers');
		$result = $conn->query('SELECT 
    U.id, Us.`LastName` as `User`, U.`value`, PT.`nameType` as `Type`
FROM
    Fall2013_PhoneNumbers U
        join
	Fall2013_Users Us on U.Users_id = Us.id 
		join 
	Fall2013_PhoneTypes PT on U.PhoneTypes_id = PT.id');
		
		while ($rs = $result->fetch_assoc()) {
		$ret[] = $rs;
		}

		$conn->close();
		return $ret;
	}

}
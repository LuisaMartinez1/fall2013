<?php

/**
 * 
 */
class Emails {

	static public function Get()
	{
		$ret = array();
		$conn = GetConnection();
		$result = $conn->query('SELECT * FROM Fall2013_Emails');
		$result = $conn->query('SELECT 
    U.id, U.Email, Us.`LastName` as `User`, ET.`EmailType` as `EmailType`
FROM
    Fall2013_Emails U
        join
	Fall2013_Users Us on U.Users_id = Us.id 
		join 
	Fall2013_EmailTypes ET on U.EmailTypes_id = ET.id');

		while ($rs = $result->fetch_assoc()) {
		$ret[] = $rs;
		}

		$conn->close();
		return $ret;
	}

}

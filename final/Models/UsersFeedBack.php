<?php

/**
 * 
 */
class UsersFeedBack {

	static public function Get()
	{
		$ret = array();
		$conn = GetConnection();
		$result = $conn->query('SELECT * FROM Fall2013_UsersFeedBack');
		$result = $conn->query('SELECT 
    U.id, Us.`LastName` as `User`,FeedBack
		FROM
    Fall2013_UsersFeedBack U
        join
	Fall2013_Users Us on U.Users_id = Us.id 
		');

		while ($rs = $result->fetch_assoc()) {
		$ret[] = $rs;
		}

		$conn->close();
		return $ret;
	}

}
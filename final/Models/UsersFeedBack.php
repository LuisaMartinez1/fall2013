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

		while ($rs = $result->fetch_assoc()) {
		$ret[] = $rs;
		}

		$conn->close();
		return $ret;
	}

}
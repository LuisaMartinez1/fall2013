<?php

/**
 * 
 */
class WishList {

	static public function Get()
	{
		$ret = array();
		$conn = GetConnection();
		$result = $conn->query('SELECT * FROM Fall2013_UserWishLists');
		$result = $conn->query('SELECT 
    U.id, Us.`LastName` as `User`, I.`ItemName` as `Item`
		FROM
    Fall2013_UserWishLists U
        join
	Fall2013_Users Us on U.Users_id = Us.id 
		join
	Fall2013_Items I on U.Fall2013_Items_id = I.id
		');

		while ($rs = $result->fetch_assoc()) {
		$ret[] = $rs;
		}

		$conn->close();
		return $ret;
	}

}
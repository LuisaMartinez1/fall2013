<?php

/**
 * 
 */
class Keywords {
	
	static public function Get()
	{
		$ret = array();
		$conn = GetConnection();
		$results = $conn->query('SELECT * FROM Fall2013_Keywords');
		
		while ($rs = $result->fetch_assoc()) {
			$ret[] = $rs;
		}
		
		$conn->close(); 
		return $ret; 
	}
}

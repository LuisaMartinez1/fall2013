<?php

/**
 * 
 */
class ItemsSold {

	static public function Get()
	{
		return fetch_all('SELECT * FROM Fall2013_ItemsSold');
	}
	
}
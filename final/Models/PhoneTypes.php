<?php

/**
 * 
 */
class PhoneTypes {
	static public function Get()
	{
		return fetch_all('SELECT * FROM Fall2013_PhoneTypes');
	}
}
<?php

/**
 * 
 */
class ProductKeyWords {


	static public function Get()
	{
		return fetch_all('SELECT * FROM Fall2013_ProductKeyWords');
	}
}
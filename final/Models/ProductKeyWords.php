<?php

/**
 * 
 */
class ProductKeyWords {

	static public function Get()
	{
		return fetch_call('SELECT * FROM Fall2013_ProductKeyWords');

  }
}
<?php

/**
 * 
 */
class Addresses {


 		static public function Get($id=null)
        {
           
                if(isset($id))
                {
                        return fetch_one("SELECT * FROM Fall2013_Addresses WHERE id=$id");                        
                }
                else
                {
                        return fetch_all('SELECT 
			   			 U.id,Street,City,Country,State,ZipCode, US.`LastName` as `User`, AT.`AddressType` as `Type`
							FROM
						 Fall2013_Addresses U
						        join
						Fall2013_AddressTypes AT on U.AddressTypes_id = AT.id 
								join
						Fall2013_Users US on U.Users_id = US.id');                        
                }
							
        }

}

	

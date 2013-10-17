<?php
class Users 
{
	
        
        static public function Get($id=null)
        {
           	
                if(isset($id))
                {
                        return fetch_one("SELECT 
    					U.id,FirstName,LastName,K.`Name` as `KeyWord`, password
							FROM
    					Fall2013_Users U
        					join
						Fall2013_KeyWords K on U.KeyWords_id = K.id WHERE id = $id ");                        
                }
                else
                {
                        return fetch_all('SELECT 
    					U.id,FirstName,LastName,K.`Name` as `KeyWord`, password
							FROM
    					Fall2013_Users U
        					join
						Fall2013_KeyWords K on U.KeyWords_id = K.id');                        
                }		
        }
	 
        
}

		
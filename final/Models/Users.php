<?php

/**
 * 
 */
class Users {
	
        
        static public function Get($id=null)
        {
           
                if(isset($id))
                {
                        return fetch_one("SELECT * FROM Fall2013_Users WHERE id=$id");                        
                }
                else
                {
                        return fetch_all('SELECT 
    					U.id,FirstName, LastName,K.`Name` as `KeyWord`, password
							FROM
    					Fall2013_Users U
        					join
						Fall2013_KeyWords K on U.KeyWords_id = K.id ');                        
                }
				
					
        }

		
	 	static public function Save($row)
        {
                $sql = " Insert Into 2013Fall_Users (FirstName, LastName, password, KeyWord) "
                        .  " Values ('$row[FirstName]', '$row[LastName]', '$row[password]', '$row[UserType]') ";
                $conn = GetConnection();
                $conn->query($sql);
                $error = $conn->error;                
                $conn->close();
                
                if($error){
                        return array('db_error' => $error);
                }else {
                        return false;
                }
        }

}

		
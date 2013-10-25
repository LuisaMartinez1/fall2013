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
                        return fetch_all('SELECT * FROM Fall2013_Users ');                        
                }
				
					
        }

		
	 	static public function Save($row)
        {
                $sql = " Insert Into Fall2013_Users (FirstName, LastName, password, KeyWords_id) "
                        .  " Values ('$row[FirstName]', '$row[LastName]', '$row[password]', '$row[KeyWords_id]') ";
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

        static public function Blank()
		{
			return array('FirstName'=> null, 'LastName'=> null, 'password'=> null, 'KeyWords_id'=> null, 'FBID'=> null);
		}

		static public function Validate($row)
		{
			$errors = array();
			if(!$row['FirstName']) $errors['FirstName']=" is required";
			if(!$row['LastName']) $errors['LastName']=" is required";
			if(!is_numeric($row['KeyWords_id'])) $errors['KeyWords_id'] = " input has to be numeric";
			
			if(count($errors) == 0)
			{
				return false;
			}else
			{
				return $errors;
					
			}
		}
	}

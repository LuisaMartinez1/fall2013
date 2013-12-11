<?php

/**
 * 
 */
class Users {
	
        
        static public function Get($id=null)
        {
                
                if(isset($id))
                {
                	$sql = "SELECT  U.* , K.Name as `KeyWords`
                			FROM 
                			Fall2013_Users U 
                        	Join Fall2013_KeyWords  K ON U.KeyWords_id = K.id
                        	WHERE U.id=$id";
                        return fetch_one($sql);                              
                }
                else
                {
                        return fetch_all('SELECT  U.* , K.Name as `KeyWords`
                			FROM 
                			Fall2013_Users U
                        	Join Fall2013_KeyWords  K ON U.KeyWords_id = K.id ');                        
                }
					
        }
	 	static public function Save($row)
        {
        		$conn = GetConnection();
        		$row2 = Users::Encode($row,$conn);
				
        	   if($row['id'])
			   {
			   	 $sql = " UPDATE  Fall2013_Users " 
			   	 . " Set FirstName='$row2[FirstName]', LastName='$row2[LastName]', password='$row2[password]', KeyWords_id='$row2[KeyWords_id]' " 
			   	 . " WHERE id=$row2[id] " ;
			   }
			   else {
				   $sql = " Insert Into Fall2013_Users (FirstName, LastName, password, KeyWords_id) "
                        .  " Values ('$row2[FirstName]', '$row2[LastName]', '$row2[password]', '$row2[KeyWords_id]') ";
			   }
                
               
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
			return array('id'=>null,'FirstName'=> null, 'LastName'=> null, 'password'=> null, 'KeyWords_id'=> null, 'FBID'=> null);
		}

		static public function Validate($row)
		{
			$errors = array();
			if(!$row['KeyWords_id']) $errors['KeyWords_id']=" is required";
			if(!$row['FirstName']) $errors['FirsttName']=" is required";
			if(!$row['LastName']) $errors['LastName']=" is required";
		
			
			
			if(count($errors) == 0)
			{
				return false;
			}else
			{
				return $errors;
					
			}
			
		}
		
	static function Encode($row, $conn)
	{
			
				$row2 = array();
				foreach($row as $key => $value)
				{
					$row2[$key] = $conn->real_escape_string($value);
				}
				return $row2;
				
	}
	static public function Delete($id)
	{
				$conn = GetConnection();
                $sql =  " DELETE From Fall2013_Users  WHERE id=$id ";
                                
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
	

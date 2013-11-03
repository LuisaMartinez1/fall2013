<?php

/**
 * 
 */
class WishList {

		static public function Get($id=null)
        {
           
                if(isset($id))
                {
                        return fetch_one("SELECT * FROM Fall2013_UserWishLists  WHERE id=$id");                        
                }
                else
                {
                        return fetch_all('SELECT 
					    U.id, Us.`LastName` as `Users_id`, I.`ItemName` as `Fall2013_Items_id`
							FROM
					    Fall2013_UserWishLists U
					        join
						Fall2013_Users Us on U.Users_id = Us.id 
							join
						Fall2013_Items I on U.Fall2013_Items_id = I.id ');                        
                }
		}				

		static public function Save($row)
        {
        		$conn = GetConnection();
        		$row2 = Users::Encode($row,$conn);
				
        	   if($row['id'])
			   {
			   	 $sql = " UPDATE  Fall2013_UserWishLists " 
			   	 . " Set Users_id='$row2[Users_id]', Fall2013_Items_id='$row2[Fall2013_Items_id]' " 
			   	 . " WHERE id=$row2[id] " ;
			   }
			   else {
				   $sql = " Insert Into Fall2013_UserWishLists  (Users_id, Fall2013_Items_id) "
                        .  " Values ('$row2[Users_id]', '$row2[Fall2013_Items_id]') ";
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
			return array('id'=>null,'Users_id'=> null, 'Fall2013_Items_id'=> null);
		}

		static public function Validate($row)
		{
			$errors = array();
			if(!is_numeric($row['Users_id'])) $errors['Users_id'] = " input has to be numeric";
			if(!$row['Fall2013_Items_id']) $errors['Fall2013_Items_id']=" is required";
			
			
			
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
                $sql =  " DELETE From Fall2013_UserWishLists   WHERE id=$id ";
                                
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
	

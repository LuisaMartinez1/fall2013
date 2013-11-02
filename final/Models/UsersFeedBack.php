<?php

/**
 * 
 */
class UsersFeedBack {

		static public function Get($id=null)
        {
           
                if(isset($id))
                {
                        return fetch_one("SELECT * FROM Fall2013_UsersFeedBack WHERE id=$id");                        
                }
                else
                {
                        return fetch_all('SELECT 
					    U.id, Us.`LastName` as `Users_id`,FeedBack
							FROM
					    Fall2013_UsersFeedBack U
					        join
						Fall2013_Users Us on U.Users_id = Us.id ');                        
                }
		}				

static public function Save($row)
        {
        		$conn = GetConnection();
        		$row2 = Users::Encode($row,$conn);
				
        	   if($row['id'])
			   {
			   	 $sql = " UPDATE  Fall2013_UsersFeedBack " 
			   	 . " Set Users_id='$row2[Users_id]', FeedBack='$row2[FeedBack]' " 
			   	 . " WHERE id=$row2[id] " ;
			   }
			   else {
				   $sql = " Insert Into Fall2013_UsersFeedBack (Users_id, FeedBack) "
                        .  " Values ('$row2[Users_id]', '$row2[FeedBack]') ";
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
			return array('id'=>null,'Users_id'=> null, 'FeedBack'=> null);
		}

		static public function Validate($row)
		{
			$errors = array();
			if(!is_numeric($row['Users_id'])) $errors['Users_id'] = " input has to be numeric";
			if(!$row['FeedBack']) $errors['FeedBack']=" is required";
			
			
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
                $sql =  " DELETE From Fall2013_UsersFeedBack  WHERE id=$id ";
                                
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
	

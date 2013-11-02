<?php

/**
 * 
 */
class Emails {

	
      static public function Get($id=null)
      {
           
                if(isset($id))
                {
                        return fetch_one("SELECT * FROM Fall2013_Emails WHERE id=$id");                        
                }
                else
                {
                        return fetch_all('SELECT 
					    U.id, U.Email, Us.`LastName` as `Users_id`, ET.`EmailType` as `EmailTypes_id`
							FROM
					    Fall2013_Emails U
					        join
						Fall2013_Users Us on U.Users_id = Us.id 
							join 
						Fall2013_EmailTypes ET on U.EmailTypes_id = ET.id');                        
                }
							
        }
	  static public function Save($row)
      {
        		$conn = GetConnection();
        		$row2 = Users::Encode($row,$conn);
				
        	   if($row['id'])
			   {
			   	 $sql = " UPDATE  Fall2013_Emails " 
			   	 . " Set Users_id ='$row2[Users_id]', Email='$row2[Email]', EmailTypes_id='$row2[EmailTypes_id]' " 
			   	 . " WHERE id=$row2[id] " ;
			   }
			   else {
				   $sql = " Insert Into Fall2013_Emails (Users_id, Email, EmailTypes_id) "
                        .  " Values ('$row2[Users_id]', '$row2[Email]', '$row2[EmailTypes_id]') ";
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
			return array('id'=>null,'Users_id'=> null, 'Email'=> null, 'EmailTypes_id'=> null);
		}

		static public function Validate($row)
		{
			$errors = array();
			if(!is_numeric($row['Users_id'])) $errors['Users_id'] = " input has to be numeric";
			if(!$row['Email']) $errors['Email']=" is required";
			if(!$row['EmailTypes_id']) $errors['EmailTypes_id']=" is required";
			
			
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
	

}

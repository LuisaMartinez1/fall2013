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
			   			 U.id,Street,City,Country,State,ZipCode, US.`LastName` as `Users_id`, AT.`AddressType` as `AddressTypes_id`
							FROM
						 Fall2013_Addresses U
						        join
						Fall2013_AddressTypes AT on U.AddressTypes_id = AT.id 
								join
						Fall2013_Users US on U.Users_id = US.id');                        
                }
							
        }

static public function Save($row)
        {
        		$conn = GetConnection();
        		$row2 = Users::Encode($row,$conn);
				
        	   if($row['id'])
			   {
			   	 $sql = " UPDATE  Fall2013_Addresses " 
			   	 . " Set Users_id='$row2[Users_id]', AddressTypes_id='$row2[AddressTypes_id]', Street='$row2[Street]',State='$row2[State]', City='$row2[City]',Country='$row2[Country]',ZipCode='$row2[ZipCode]'" 
			   	 . " WHERE id=$row2[id] " ;
			   }
			   else {
				   $sql = " Insert Into Fall2013_Addresses (Users_id, AddressTypes_id, Street, State, City,Country,Zipcode) "
                        .  " Values ('$row2[Users_id]', '$row2[AddressTypes_id]', '$row2[Street]', '$row2[City]','$row2[Country]','$row2[ZipCode]','$row2[State]') ";
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
			return array('id'=>null,'Users_id'=> null, 'AddressTypes_id'=> null, 'Street'=> null, 'City'=> null, 'Country'=> null, 'ZipCode'=> null,'State' =>null);
		}

		static public function Validate($row)
		{
			$errors = array();
			if(!is_numeric($row['Users_id'])) $errors['Users_id'] = " input has to be numeric";
			if(!$row['AddressTypes_id']) $errors['AddressTypes_id']=" is required";
			if(!$row['Users_id']) $errors['Street']=" is required";
			if(!$row['Users_id']) $errors['City']=" is required";
			if(!$row['Users_id']) $errors['Country']=" is required";
			
			
			
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
                $sql =  " DELETE From Fall2013_Addresses  WHERE id=$id ";
                                
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
	

	

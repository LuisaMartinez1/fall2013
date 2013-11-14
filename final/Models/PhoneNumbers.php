<?php
/**
 * 
 */
class PhoneNumbers{

		static public function Get($id=null)
        {
           
                if(isset($id))
                {
                		$sql = "SELECT 
					    U.*, Us.`LastName` as `Users`, P.`nameType` as `PhoneTypes`
							FROM
					    Fall2013_PhoneNumbers U
					        join
						Fall2013_Users Us on U.Users_id = Us.id 
							join 
						Fall2013_PhoneTypes P on U.PhoneTypes_id = P.id
						WHERE U.id=$id";
                        return fetch_one($sql);                        
                }
                else
                {
                        return fetch_all('SELECT 
					    U.id, Us.`LastName` as `Users_id`, U.`value`, PT.`nameType` as `PhoneTypes_id`
							FROM
					    Fall2013_PhoneNumbers U
					        join
						Fall2013_Users Us on U.Users_id = Us.id 
							join 
						Fall2013_PhoneTypes PT on U.PhoneTypes_id = PT.id');                        
                }
		}				

		static public function Save($row)
        {
        		$conn = GetConnection();
        		$row2 =  PhoneNumbers::Encode($row,$conn);
				
        	   if($row['id'])
			   {
			   	 $sql = " UPDATE  Fall2013_PhoneNumbers   " 
			   	 . " Set Users_id='$row2[Users_id]', value='$row2[value]',PhoneTypes_id='$row2[PhoneTypes_id]' " 
			   	 . " WHERE id=$row2[id] " ;
			   }
			   else {
				   $sql = " Insert Into Fall2013_PhoneNumbers  (Users_id, value, PhoneTypes_id) "
                        .  " Values ('$row2[Users_id]', '$row2[value]', '$row2[PhoneTypes_id]') ";
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
			return array('id'=>null,'Users_id'=> null, 'value'=> null, 'PhoneTypes_id'=> null);
		}

		static public function Validate($row)
		{
			$errors = array();
			if(!is_numeric($row['Users_id'])) $errors['Users_id'] = " input has to be numeric";
			if(!$row['value']) $errors['value'] = " input required";
			if(!$row['PhoneTypes_id']) $errors['PhoneTypes_id']=" is required";
			
			
			
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
                $sql =  " DELETE From Fall2013_PhoneNumbers   WHERE id=$id ";
                                
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
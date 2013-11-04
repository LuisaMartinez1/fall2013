<?php

/**
 * 
 */
class EmailTypes {

	static public function Get($id=null)
        {
                
                if(isset($id))
                {
                        return fetch_one("SELECT * FROM Fall2013_EmailTypes WHERE id=$id");                        
                }
                else
                {
                        return fetch_all('SELECT * FROM Fall2013_EmailTypes ');                        
                }
					
        }
	 	static public function Save($row)
        {
        		$conn = GetConnection();
        		$row2 = EmailTypes::Encode($row,$conn);
				
        	   if($row['id'])
			   {
			   	 $sql = " UPDATE  Fall2013_EmailTypes " 
			   	 . " Set EmailType='$row2[EmailType]' " 
			   	 . " WHERE id=$row2[id] " ;
			   }
			   else {
				   $sql = " Insert Into Fall2013_EmailTypes (EmailType) "
                        .  " Values ( '$row2[EmailType]') ";
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
			return array('id'=>null, 'EmailType'=> null);
		}

		static public function Validate($row)
		{
			$errors = array();
			if(!$row['EmailType']) $errors['EmailType']=" is required";
			
			
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
                $sql =  " DELETE From Fall2013_EmailTypes  WHERE id=$id ";
                                
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

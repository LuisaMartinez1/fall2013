<?php

/**
 * 
 */ 
class ProductKeyWords {


	
	  static public function Get($id=null)
        {
                
                if(isset($id))
                {
                        return fetch_one("SELECT * FROM Fall2013_ProductKeyWords WHERE id=$id");                        
                }
                else
                {
                        return fetch_all('SELECT * FROM Fall2013_ProductKeyWords ');                        
                }
					
        }
	 	static public function Save($row)
        {
        		$conn = GetConnection();
        		$row2 = Users::Encode($row,$conn);
				
        	   if($row['id'])
			   {
			   	 $sql = " UPDATE  Fall2013_ProductKeyWords " 
			   	 . " Set Name='$row2[Name]' " 
			   	 . " WHERE id=$row2[id] " ;
			   }
			   else {
				   $sql = " Insert Into Fall2013_ProductKeyWords (Name) "
                        .  " Values ( '$row2[Name]') ";
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
			return array('id'=>null,'KeyWords_id'=> null, 'Name'=> null);
		}

		static public function Validate($row)
		{
			$errors = array();
			if(!$row['Name']) $errors['Name']=" is required";
			
			
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
                $sql =  " DELETE From Fall2013_ProductKeyWords  WHERE id=$id ";
                                
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
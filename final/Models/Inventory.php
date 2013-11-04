<?php

/**
 * 
 */
class Inventory{
	 static public function Get($id=null)
        {
                
                if(isset($id))
                {
                        return fetch_one("SELECT * FROM Fall2013_Inventories WHERE id=$id");                        
                }
                else
                {
                        return fetch_all('SELECT * FROM Fall2013_Inventories');                        
                }
					
        }
	 	static public function Save($row)
        {
        		$conn = GetConnection();
        		$row2 = Inventory::Encode($row,$conn);
				
        	   if($row['id'])
			   {
			   	 $sql = " UPDATE  Fall2013_Inventories " 
			   	 . " Set Quantaty='$row2[Quantaty]',QuantatySold='$row2[QuantatySold]'" 
			   	 . " WHERE id=$row2[id] " ;
			   }
			   else {
				   $sql = " Insert Into Fall2013_Inventories (Quantaty,QuantatySold) "
                        .  " Values ( '$row2[Quantaty]','$row2[QuantatySold]') ";
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
			return array('id'=>null, 'Quantaty'=> null,'QuantatySold'=> null);
		}

		static public function Validate($row)
		{
			$errors = array();
			if(!$row['Quantaty']) $errors['Quantaty']=" is required";
			
			
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
                $sql =  " DELETE From Fall2013_Inventories  WHERE id=$id ";
                                
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
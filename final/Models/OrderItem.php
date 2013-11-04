<?php

/**
 * 
 */
class OrderItem{

		static public function Get($id=null)
        {
           
                if(isset($id))
                {
                        return fetch_one("SELECT * FROM Fall2013_Order_Items WHERE id=$id");                        
                }
                else
                {
                        return fetch_all('SELECT
						U.id, O.`PurchaseNumber` as `Orders_id`, I.`ItemName` as `Items_id`
							FROM
						Fall2013_Order_Items U
							join 
						Fall2013_Orders O on U.Orders_id = O.id
							join
						Fall2013_Items I on U.Items_id = I.id ');                        
                }
		}		
	static public function Save($row)
        {
        		$conn = GetConnection();
        		$row2 = OrderItem::Encode($row,$conn);
				
        	   if($row['id'])
			   {
			   	 $sql = " UPDATE Fall2013_Order_Items " 
			   	 . " Set Orders_id='$row2[Orders_id]', Items_id='$row2[Items_id]' " 
			   	 . " WHERE id=$row2[id] " ;
			   }
			   else {
				   $sql = " Insert Into Fall2013_Order_Items (Orders_id,Items_id ) "
                        .  " Values ('$row2[Orders_id]', '$row2[Items_id]') ";
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
			return array('id'=>null,'Orders_id'=> null, 'Items_id'=> null);
		}

		static public function Validate($row)
		{
			$errors = array();
			if(!$row['Items_id']) $errors['Items_ide']=" is required";
			if(!is_numeric($row['Orders_id'])) $errors['Orders_id'] = " input has to be numeric";
			
			
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
                $sql =  " DELETE From Fall2013_Order_Items  WHERE id=$id ";
                                
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
	
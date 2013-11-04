<?php

/**
 * 
 */
class Shipments {

		static public function Get($id=null)
        {
           
                if(isset($id))
                {
                        return fetch_one("SELECT * FROM Fall2013_Shipments WHERE id=$id");                        
                }
                else
                {
                        return fetch_all('SELECT 
						U.id, ShipmentNumber, PI.`PurchaseNumber` as `Purchases_id`, A.`City` as `Addresses_id`
							FROM
						Fall2013_Shipments U
							join
						Fall2013_Orders PI on U.Purchases_id = PI.id
							join
						Fall2013_Addresses A on U.Addresses_id = A.id ');                        
                }
		}				
	static public function Save($row)
        {
        		$conn = GetConnection();
        		$row2 = Shipments::Encode($row,$conn);
				
        	   if($row['id'])
			   {
			   	 $sql = " UPDATE  Fall2013_Shipments " 
			   	 . " Set ShipmentNumber='$row2[ShipmentNumber]', Purchases_id='$row2[Purchases_id]', Addresses_id='$row2[Addresses_id]' " 
			   	 . " WHERE id=$row2[id] " ;
			   }
			   else {
				   $sql = " Insert Into Fall2013_Shipments (ShipmentNumber, Purchases_id, Addresses_id) "
                        .  " Values ('$row2[ShipmentNumber]', '$row2[Purchases_id]', '$row2[Addresses_id]') ";
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
			return array('id'=>null,'ShipmentNumber'=> null, 'Purchases_id'=> null, 'Addresses_id'=> null);
		}

		static public function Validate($row)
		{
			$errors = array();
			if(!$row['Purchases_id']) $errors['Purchases_id']=" is required";
			if(!$row['Addresses_id']) $errors['Addresses_id']=" is required";
			if(!is_numeric($row['ShipmentNumber'])) $errors['ShipmentNumber'] = " input has to be numeric";
			
			
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
                $sql =  " DELETE From Fall2013_Shipments  WHERE id=$id ";
                                
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
	
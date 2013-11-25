<?php

/**
 * 
 */
class Orders {

		static public function Get($id=null)
        {
           
                if(isset($id))
                {
                		$sql = "SELECT 
					    U.*, Us.`LastName` as `Users`, P.`Method` as `PaymentCreditCardTypes_id`
						FROM
					    Fall2013_Orders U
					        join
						Fall2013_Users Us on U.Users_id = Us.id 
							join 
						Fall2013_PaymentCreditCardTypes P on U.Fall2013_PaymentCreditCardTypes_id = P.id
						WHERE U.id=$id";		
                        return fetch_one($sql);                        
                }
                else
                {
                        return fetch_all('SELECT 
					    U.*, Us.`LastName` as `Users_id`, P.`Method` as `Fall2013_PaymentCreditCardTypes_id`,PurchasedTotal
						FROM
					    Fall2013_Orders U
					        join
						Fall2013_Users Us on U.Users_id = Us.id 
							join 
						Fall2013_PaymentCreditCardTypes P on U.Fall2013_PaymentCreditCardTypes_id = P.id ');                        
                }
		}		

static public function Save($row)
        {
        		$conn = GetConnection();
        		$row2 = Orders::Encode($row,$conn);
				
        	   if($row['id'])
			   {
			   	 $sql = " UPDATE  Fall2013_Orders " 
			   	 . " Set Users_id='$row2[Users_id]',PurchaseNumber='$row2[PurchaseNumber]',PurchasedTotal='$row2[PurchasedTotal]',PurchaseDate='$row2[PurchaseDate]', Fall2013_PaymentCreditCardTypes_id='$row2[Fall2013_PaymentCreditCardTypes_id]' " 
			   	 . " WHERE id=$row2[id] " ;
			   }
			   else {
				   $sql = " Insert Into Fall2013_Orders (Users_id, PurchaseNumber, PurchaseDate, Fall2013_PaymentCreditCardTypes_id, PurchasedTotal) "
                        .  " Values ('$row2[Users_id]', '$row2[PurchaseNumber]', '$row2[PurchaseDate]', '$row2[Fall2013_PaymentCreditCardTypes_id]','$row2[PurchasedTotal]') ";
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
			return array('id'=>null,'Users_id'=> null, 'PurchaseNumber'=> null, 'PurchaseDate'=> null, 'PurchasedTotal'=> null, 'Fall2013_PaymentCreditCardTypes_id'=> null);
		}

		static public function Validate($row)
		{
			$errors = array();
			if(!$row['PurchaseNumber']) $errors['PurchaseNumber']=" is required";
			if(!$row['Fall2013_PaymentCreditCardTypes_id']) $errors['Fall2013_PaymentCreditCardTypes_id']=" is required";
			if(!is_numeric($row['Users_id'])) $errors['Users_id'] = " input has to be numeric";
			if(!$row['PurchasedTotal']) $errors['PurchasedTotal']=" is required";
			
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
                $sql =  " DELETE From Fall2013_Orders  WHERE id=$id ";
                                
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
	

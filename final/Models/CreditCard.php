<?php

/**
 * 
 */
class CreditCard {

	static public function Get($id=null)
        {
           
                if(isset($id))
                {
                		$sql = "SELECT 
					    U.*, Us.`LastName` as `Fall2013_Users`
						FROM
					    Fall2013_PaymentCreditCardTypes U
					        join
						Fall2013_Users Us on U.Fall2013_Users_id = Us.id
						WHERE U.id=$id";
                        return fetch_one($sql);                        
                }
                else
                {
                        return fetch_all('SELECT 
					    U.id,CreditCardNumber,CreditCardHolderName,CreditExpirationDate,CreditSecurityCode, Us.`LastName` as `Fall2013_Users_id`, Method
						FROM
					    Fall2013_PaymentCreditCardTypes U
					        join
						Fall2013_Users Us on U.Fall2013_Users_id = Us.id ');                        
                }
		}	
		static public function GetPayment($id)
		{
			$sql = "SELECT U.*,
					    Us.`id` as `userid`
						FROM
					    Fall2013_PaymentCreditCardTypes U
					        join
						Fall2013_Users Us on U.Fall2013_Users_id = Us.id
						WHERE Us.id=$id ";
			 return fetch_all($sql);
		}
						
		static public function Save($row)
        {
        		$conn = GetConnection();
        		$row2 =  CreditCard::Encode($row,$conn);
				
        	   if($row['id'])
			   {
			   	 $sql = " UPDATE  Fall2013_PaymentCreditCardTypes " 
			   	 . " Set Fall2013_Users_id='$row2[Fall2013_Users_id]', CreditCardNumber='$row2[CreditCardNumber]', CreditCardHolderName='$row2[CreditCardHolderName]', Method='$row2[Method]',CreditSecurityCode='$row2[CreditSecurityCode]',CreditExpirationDate='$row2[CreditExpirationDate]' " 
			   	 . " WHERE id=$row2[id] " ;
			   }
			   else {
				   $sql = " Insert Into Fall2013_PaymentCreditCardTypes (Fall2013_Users_id, CreditCardNumber, CreditCardHolderName, CreditExpirationDate,CreditSecurityCode, Method) "
                        .  " Values ('$row2[Fall2013_Users_id]', '$row2[CreditCardNumber]', '$row2[CreditCardHolderName]', '$row2[CreditExpirationDate]', '$row2[CreditSecurityCode]','$row2[Method]') ";
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
			return array('id'=>null,'Fall2013_Users_id'=> null, 'CreditCardNumber'=> null, 'CreditCardHolderName'=> null, 'CreditExpirationDate'=> null, 'CreditSecurityCode'=> null,'Method'=>null);
		}

		static public function Validate($row)
		{
			$errors = array();
			if(!$row['CreditCardHolderName']) $errors['CreditCardHolderName']=" is required";
			if(!$row['CreditExpirationDate']) $errors['CreditExpirationDate']=" is required";
			if(!$row['CreditCardNumber']) $errors['CreditCardNumber']=" is required";
			if(!is_numeric($row['Fall2013_Users_id'])) $errors['Fall2013_Users_id'] = " input has to be numeric";
			if(!is_numeric($row['CreditSecurityCode'])) $errors['CreditSecurityCode'] = " input has to be numeric";
			
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
                $sql =  " DELETE From Fall2013_PaymentCreditCardTypes  WHERE id=$id ";
                                
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

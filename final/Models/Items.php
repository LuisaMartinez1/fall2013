<?php

/**
 * 
 */
class Items {
		static public function Get($id=null)
        {
           
                if(isset($id))
                {
                		$sql = "SELECT 
						    U.*, I.`Quantaty` as `Inventories`, C.`CategoryName` as `Categories`, PK.`Name` as `ProductKeyWords`
								FROM
						    Fall2013_Items U
						        join
							Fall2013_Inventories I on U.Inventories_id = I.id 
								join 
							Fall2013_Categories C on U.Categories_id = C.id
								join 
							Fall2013_ProductKeyWords PK on U.ProductKeyWords_id = PK.id 
							WHERE U.id=$id";
							
                        return fetch_one($sql);                        
                }
                else
                {
                        return fetch_all('SELECT 
						    U.*,I.`Quantaty` as `Inventories_id`, C.`CategoryName` as `Categories_id`, PK.`Name` as `ProductKeyWords_id`
								FROM
						    Fall2013_Items U
						        join
							Fall2013_Inventories I on U.Inventories_id = I.id 
								join 
							Fall2013_Categories C on U.Categories_id = C.id
								join 
							Fall2013_ProductKeyWords PK on U.ProductKeyWords_id = PK.id ');                        
                }
		}	
		
		public function GetByCategory($id=null)
		{
			$sql = "SELECT * FROM Fall2013_Items 
					WHERE Categories_id = $id";
					
					return fetch_all($sql);
		}
		
   
		static public function GetCategory($id=null)
                {
                        
                        
                                        $sql = "SELECT 
                                                    U.*, I.`Quantaty` as `Inventories`, C.`CategoryName` as `Categories`, PK.`Name` as `ProductKeyWords`
                                                                FROM
                                                    Fall2013_Items U
                                                        join
                                                        Fall2013_Inventories I on U.Inventories_id = I.id 
                                                                join 
                                                        Fall2013_Categories C on U.Categories_id = C.id
                                                                join 
                                                        Fall2013_ProductKeyWords PK on U.ProductKeyWords_id = PK.id
                                                        
                                                        WHERE C.id=$id ";
                                                        
                                        
                                                    return fetch_all($sql);
                                
                        
                }
		
		
		  static public function BlankComplete()
		{
			return array('id'=>null,'Orders_id'=> null, 'Items_id'=> null);
		}
		static public function GetItemPrice($id=null)
		{
			
			return fetch_one("SELECT ItemPrice FROM Fall2013_Items WHERE id=$id");
	
		}
		static public function GetOrderNumber($id=null)
		{
			return fetch_one("SELECT PurchaseNumber FROM Fall2013_Orders WHERE id=$id");
		}
		static public function GetUser($id=null)
		{
			if(isset($id))
                {
                	$sql = "SELECT  U.* , K.Name as `KeyWords`
                			FROM 
                			Fall2013_Users U 
                        	Join Fall2013_KeyWords  K ON U.KeyWords_id = K.id
                        	WHERE U.id=$id";
                        return fetch_one($sql);                              
                }
                else
                {
                        return fetch_all('SELECT  U.* , K.Name as `KeyWords`
                			FROM 
                			Fall2013_Users U
                        	Join Fall2013_KeyWords  K ON U.KeyWords_id = K.id ');                        
                }
		}
		
        static public function BlankAddress()
		{
			return array('id'=>null,'Users_id'=> null, 'AddressTypes_id'=> null, 'Street'=> null, 'City'=> null, 'Country'=> null, 'ZipCode'=> null,'State' =>null);
		}
		
		static public function BlankOrder()
		{
			return array('id'=>null,'Users_id'=> null, 'PurchaseNumber'=> null, 'PurchaseDate'=> null, 'PurchasedTotal'=> null, 'Fall2013_PaymentCreditCardTypes_id'=> null);
		}
		static public function BlankPayment()
		{
			return array('id'=>null,'Fall2013_Users_id'=> null, 'CreditCardNumber'=> null, 'CreditCardHolderName'=> null, 'CreditExpirationDate'=> null, 'CreditSecurityCode'=> null,'Method'=>null);
		}
		static public function BlankUser()
		{
			return array('id'=>null,'FirstName'=> null, 'LastName'=> null, 'password'=> null, 'KeyWords_id'=> null, 'FBID'=> null);
		}

		
			
		static public function Save($row)
        {
        		$conn = GetConnection();
        		$row2 = Items::Encode($row,$conn);
				
        	   if($row['id'])
			   {
			   	 $sql = " UPDATE  Fall2013_Items " 
			   	 . " Set ItemNumber='$row2[ItemNumber]', ItemName='$row2[ItemName]',ItemPrice='$row2[ItemPrice]',ProductKeyWords_id='$row2[ProductKeyWords_id]',
			   	     Categories_id='$row2[Categories_id]',Inventories_id='$row2[Inventories_id]'" 
			   	 . " WHERE id=$row2[id] " ;
			   }
			   else {
				   $sql = " Insert Into Fall2013_Items (ItemNumber, ItemName, ItemPrice, ProductKeyWords_id,Categories_id,Inventories_id) "
                        . " Values ('$row2[ItemNumber]', '$row2[ItemName]', '$row2[ItemPrice]','$row2[ProductKeyWords_id]','$row2[Categories_id]','$row2[Inventories_id]') ";
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
			return array('id'=>null,'ItemNumber'=> null, 'ItemName'=> null, 'ItemPrice'=> null, 'Inventories_id'=> null,'Categories_id'=> null,'ProductKeyWords_id'=> null,'src'=>null);
		}

		static public function Validate($row)
		{
			$errors = array();
			if(!$row['ItemPrice']) $errors['ItemPrice']=" is required";
			if(!$row['ItemName']) $errors['ItemName']=" is required";
			if(!is_numeric($row['ItemNumber'])) $errors['ItemNumber'] = " input has to be numeric";
			if(!is_numeric($row['Inventories_id'])) $errors['Inventories_id'] = " input has to be numeric";
			if(!is_numeric($row['Categories_id'])) $errors['Categories_id'] = " input has to be numeric";
			if(!is_numeric($row['ProductKeyWords_id'])) $errors['ProductKeyWords_id'] = " input has to be numeric";
			
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
                $sql =  " DELETE From Fall2013_Items  WHERE id=$id ";
                                
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

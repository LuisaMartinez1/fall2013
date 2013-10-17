<?php

/**
 * 
 */
class Orders {

		static public function Get($id=null)
        {
           
                if(isset($id))
                {
                        return fetch_one("SELECT * FROM Fall2013_Orders  s WHERE id=$id");                        
                }
                else
                {
                        return fetch_all('SELECT 
					    U.id, PurchaseNumber, PurchaseDate, Us.`LastName` as `User`, P.`Method` as `PaymentMethod`,PurchasedTotal
						FROM
					    Fall2013_Orders U
					        join
						Fall2013_Users Us on U.Users_id = Us.id 
							join 
						Fall2013_PaymentCreditCardTypes P on U.Fall2013_PaymentCreditCardTypes_id = P.id ');                        
                }
		}		

}
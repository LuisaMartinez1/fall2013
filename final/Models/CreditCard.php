<?php

/**
 * 
 */
class CreditCard {

	static public function Get($id=null)
        {
           
                if(isset($id))
                {
                        return fetch_one("SELECT * FROM Fall2013_PaymentCreditCardTypes WHERE id=$id");                        
                }
                else
                {
                        return fetch_all('SELECT 
					    U.id,CreditCardNumber,CreditCardHolderName,CreditExpirationDate,CreditSecurityCode, Us.`LastName` as `User`, Method
						FROM
					    Fall2013_PaymentCreditCardTypes U
					        join
						Fall2013_Users Us on U.Fall2013_Users_id = Us.id ');                        
                }
		}					
}

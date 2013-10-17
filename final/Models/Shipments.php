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
						U.id, ShipmentNumber, PI.`PurchaseNumber` as `Purchase`, A.`City` as `AddressCity`
							FROM
						Fall2013_Shipments U
							join
						Fall2013_Orders PI on U.Purchases_id = PI.id
							join
						Fall2013_Addresses A on U.Addresses_id = A.id ');                        
                }
		}				
}
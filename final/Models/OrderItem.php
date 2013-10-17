<?php

/**
 * 
 */
class OrderItem{

		static public function Get($id=null)
        {
           
                if(isset($id))
                {
                        return fetch_one("SELECT * FROM Fall2013_Items  WHERE id=$id");                        
                }
                else
                {
                        return fetch_all('SELECT
						U.id, O.`PurchaseNumber` as `Order`, I.`ItemName` as `Item`
							FROM
						Fall2013_Order_Items U
							join 
						Fall2013_Orders O on U.Orders_id = O.id
							join
						Fall2013_Items I on U.Items_id = I.id ');                        
                }
		}		
}
<?php

/**
 * 
 */
class Suppliers {

		static public function Get($id=null)
        {
           
                if(isset($id))
                {
                        return fetch_one("SELECT * FROM Fall2013_Supplier WHERE id=$id");                        
                }
                else
                {
                        return fetch_all('SELECT 
						U.id, SuplierName, SuperId, I.`ItemName` as `Item`
							FROM
						Fall2013_Supplier U 
							join
						Fall2013_Items I on U.Fall2013_Items_id = I.id ');                        
                }
		}				

}
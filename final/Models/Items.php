<?php

/**
 * 
 */
class Items {
		static public function Get($id=null)
        {
           
                if(isset($id))
                {
                        return fetch_one("SELECT * FROM Fall2013_Items  WHERE id=$id");                        
                }
                else
                {
                        return fetch_all('SELECT 
						    U.id,ItemNumber,ItemName,ItemPrice, I.`Quantaty` as `Inventory`, C.`CategoryName` as `Category`, PK.`Name` as `ProductKeyWord`,S.`NumberOfITemsSold` as `Sold`
								FROM
						    Fall2013_Items U
						        join
							Fall2013_Inventories I on U.Inventories_id = I.id 
								join 
							Fall2013_Categories C on U.Categories_id = C.id
								join 
							Fall2013_ProductKeyWords PK on U.ProductKeyWords_id = PK.id
								join 
							Fall2013_ItemsSold S on U.Fall2013_ItemsSold_id = S.id ');                        
                }
		}		
}

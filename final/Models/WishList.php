<?php

/**
 * 
 */
class WishList {

		static public function Get($id=null)
        {
           
                if(isset($id))
                {
                        return fetch_one("SELECT * FROM Fall2013_UserWishLists  WHERE id=$id");                        
                }
                else
                {
                        return fetch_all('SELECT 
					    U.id, Us.`LastName` as `User`, I.`ItemName` as `Item`
							FROM
					    Fall2013_UserWishLists U
					        join
						Fall2013_Users Us on U.Users_id = Us.id 
							join
						Fall2013_Items I on U.Fall2013_Items_id = I.id ');                        
                }
		}				

}
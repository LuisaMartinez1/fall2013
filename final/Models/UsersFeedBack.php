<?php

/**
 * 
 */
class UsersFeedBack {

		static public function Get($id=null)
        {
           
                if(isset($id))
                {
                        return fetch_one("SELECT * FROM Fall2013_UsersFeedBacks WHERE id=$id");                        
                }
                else
                {
                        return fetch_all('SELECT 
					    U.id, Us.`LastName` as `User`,FeedBack
							FROM
					    Fall2013_UsersFeedBack U
					        join
						Fall2013_Users Us on U.Users_id = Us.id ');                        
                }
		}				

}
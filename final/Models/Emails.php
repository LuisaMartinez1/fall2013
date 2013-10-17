<?php

/**
 * 
 */
class Emails {

	
      static public function Get($id=null)
      {
           
                if(isset($id))
                {
                        return fetch_one("SELECT * FROM Fall2013_Emails WHERE id=$id");                        
                }
                else
                {
                        return fetch_all('SELECT 
					    U.id, U.Email, Us.`LastName` as `User`, ET.`EmailType` as `EmailType`
							FROM
					    Fall2013_Emails U
					        join
						Fall2013_Users Us on U.Users_id = Us.id 
							join 
						Fall2013_EmailTypes ET on U.EmailTypes_id = ET.id');                        
                }
							
        }

}

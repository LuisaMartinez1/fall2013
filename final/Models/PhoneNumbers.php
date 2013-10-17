<?php
/**
 * 
 */
class PhoneNumbers{

		static public function Get($id=null)
        {
           
                if(isset($id))
                {
                        return fetch_one("SELECT * FROM Fall2013_PhoneNumbers WHERE id=$id");                        
                }
                else
                {
                        return fetch_all('SELECT 
					    U.id, Us.`LastName` as `User`, U.`value`, PT.`nameType` as `Type`
							FROM
					    Fall2013_PhoneNumbers U
					        join
						Fall2013_Users Us on U.Users_id = Us.id 
							join 
						Fall2013_PhoneTypes PT on U.PhoneTypes_id = PT.id');                        
                }
		}				

}
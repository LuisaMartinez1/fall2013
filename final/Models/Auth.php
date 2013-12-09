<?
const ADMIN = 7;
	class Auth
	{
		public static function IsLoggedIn()
		{
			return self::GetUser() != null;
		}
		public static function GetUser()
		{
			return $_SESSION['User'];
		}
		public static function HasPermission()
		{
			$user = self::GetUser();
			return $user['KeyWords_id'] ==  ADMIN;
			
		}
		public static function LogIn($userName, $password)
		{
			$sql = " SELECT  U.* 
                	 FROM Fall2013_Users U 
                        	
                      WHERE U.LastName = $userName";
                      $user =  fetch_one($sql);   
			if($user['password'] == $password)
			{
				$_SESSION['User'] = $user;
			}    
		}
		static public function Secure()
		{
			if(!self::IsLoggedIn())
			{
				header("Location " .   "/~n02076294/2013/final/../Views/Auth?action=login"); die();
			}
		}
	}

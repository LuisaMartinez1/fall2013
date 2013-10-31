<?php
include_once '../../inc/_global.php';
@$action = $_REQUEST['action'];

switch ($action) {
        case 'details':
                $model = Emails::Get($_REQUEST['id']);
                $view  = 'details.php';                
                break;
                 
        case 'new':
                $model = Emails::Blank();
                $view  = 'edit.php';                
                break;
        
        case 'save':
				$errors = Emails::Validate($_REQUEST);
				if(!$errors)
				{
					$errors = Emails::Save($_REQUEST);
				}
               
				if(!$errors)
				{
						header("Location: ?");   
						die(); 
				}
				$model = $_REQUEST;
				$view = 'edit.php';
                break;
                
        case 'edit':
                $model = Emails::Get($_REQUEST['id']);
                $view  = 'edit.php';                
                break;
                
        case 'delete':
                $model =Emails::Get($_REQUEST['id']);
                $view  = 'delete.php';                
                break;
        
        default:
                $model = Emails::Get();
                $view  = 'lists.php';                
                break;
}

include '../Shared/_Layout.php';

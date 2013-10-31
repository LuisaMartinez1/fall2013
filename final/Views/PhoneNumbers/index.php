<?php
include_once '../../inc/_global.php';

@$action = $_REQUEST['action'];

switch ($action) {
        case 'details':
                $model = PhoneNumbers::Get($_REQUEST['id']);
                $view  = 'details.php';                
                break;
                
        case 'new':
                $model = PhoneNumbers::Blank();
                $view  = 'edit.php';                
                break;
        
        case 'save':
				$errors = PhoneNumbers::Validate($_REQUEST);
				if(!$errors)
				{
					$errors = PhoneNumbers::Save($_REQUEST);
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
                $model = PhoneNumbers::Get($_REQUEST['id']);
                $view  = 'edit.php';                
                break;
                
        case 'delete':
                $model = PhoneNumbers::Get($_REQUEST['id']);
                $view  = 'delete.php';                
                break;
        
        default:
                $model = PhoneNumbers::Get();
                $view  = 'lists.php';                
                break;
}

include '../Shared/_Layout.php';

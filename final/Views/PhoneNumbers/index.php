<?php
include_once '../../inc/_global.php';

@$action = $_REQUEST['action'];
@$format = $_REQUEST['format'];

switch ($action) {
        case 'details':
                $model = PhoneNumbers::Get($_REQUEST['id']);
                $view  = 'details.php';    
				$title = "Details for: $model[value]";                   
                break;
                
        case 'new':
                $model = PhoneNumbers::Blank();
                $view  = 'edit.php';  
				$title = "Add PhoneNumeber";                 
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
				$title = "Edit: $model[value]";   
                break;
                
        case 'edit':
                $model = PhoneNumbers::Get($_REQUEST['id']);
                $view  = 'edit.php';   
				$title = "Edit: $model[value] ";                
                break;
                
        case 'delete':
               if(isset($_POST['id'])){
                        $errors = PhoneNumbers::Delete($_REQUEST['id']);                        
                        if(!$errors){
                                header("Location: ?");
                                die();
                        }                                                        
                }
                $model = PhoneNumbers::Get($_REQUEST['id']);
                $view         = 'delete.php';                                        
                $title        = "Edit: $model[value]"        ;        
                break;
        
        default:
                $model = PhoneNumbers::Get();
                $view         = 'lists.php';
                $title        = 'PhoneNumbers';                
                break;
        
   
}
switch ($format){
	case 'dialog':
		include '../Shared/_DialogLayout.php';
		break;
	
	default:
		include '../Shared/_Layout.php';
		break;
}

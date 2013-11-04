<?php
include_once '../../inc/_global.php';

@$action = $_REQUEST['action'];
@$format = $_REQUEST['format'];


switch ($action) {
        case 'details':
                $model = AddressTypes::Get($_REQUEST['id']);
                $view  = 'details.php';     
				$title = "Details for: $model[AddressType]";           
                break;
                
        case 'new':
                $model = AddressTypes::Blank();
                $view  = 'edit.php';    
				$title = "Create New AddressType";             
                break;
        
        case 'save':
				$errors = AddressTypes::Validate($_REQUEST);
				if(!$errors)
				{
					$errors = AddressTypes::Save($_REQUEST);
				}
               
				if(!$errors)
				{
						header("Location: ?");   
						die(); 
				}
				$model = $_REQUEST;
				$view = 'edit.php';
				$title = "Edit: $model[AddressType] ";           
				
                break;
                
        case 'edit':
                $model = AddressTypes::Get($_REQUEST['id']);
                $view  = 'edit.php'; 
				$title = "Edit: $model[AddressType] ";                  
                break;
                
        case 'delete':
				
				if(isset($_POST['id'])){
                        $errors = AddressTypes::Delete($_REQUEST['id']);                        
                        if(!$errors){
                                header("Location: ?");
                                die();
                        }                                                        
                }
                $model = AddressTypes::Get($_REQUEST['id']);
                $view         = 'delete.php';                                        
                $title        = "Edit: $model[AddressType]"        ;        
                break;
        
        default:
                $model = AddressTypes::Get();
                $view         = 'lists.php';
                $title        = 'AddressType';                
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




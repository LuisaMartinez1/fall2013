<?php
include_once '../../inc/_global.php';

@$action = $_REQUEST['action'];
@$format = $_REQUEST['format'];


switch ($action) {
        case 'details':
                $model = PhoneTypes::Get($_REQUEST['id']);
                $view  = 'details.php';     
				$title = "Details for: $model[NameType] ";           
                break;
                
        case 'new':
                $model =  PhoneTypes::Blank();
                $view  = 'edit.php';    
				$title = "Create new  NameType";             
                break;
        
        case 'save':
				$errors =  PhoneTypes::Validate($_REQUEST);
				if(!$errors)
				{
					$errors =  PhoneTypes::Save($_REQUEST);
				}
               
				if(!$errors)
				{
						header("Location: ?");   
						die(); 
				}
				$model = $_REQUEST;
				$view = 'edit.php';
				$title = "Edit: $model[NameType]";           
				
                break;
                
        case 'edit':
                $model =  PhoneTypes::Get($_REQUEST['id']);
                $view  = 'edit.php'; 
				$title = "Edit: $model[NameType] ";                  
                break;
                
        case 'delete':
				
				if(isset($_POST['id'])){
                        $errors =  PhoneTypes::Delete($_REQUEST['id']);                        
                        if(!$errors){
                                header("Location: ?");
                                die();
                        }                                                        
                }
                $model =  PhoneTypes::Get($_REQUEST['id']);
                $view         = 'delete.php';                                        
                $title        = "Edit: $model[NameType] " ;        
                break;
        
        default:
                $model =   PhoneTypes::Get();
                $view         = 'lists.php';
                $title        = 'Keywords';                
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



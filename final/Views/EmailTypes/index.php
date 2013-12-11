<?php
include_once '../../inc/_global.php';
Auth::Secure();
@$action = $_REQUEST['action'];
@$format = $_REQUEST['format'];


switch ($action) {
        case 'details':
                $model = EmailTypes::Get($_REQUEST['id']);
                $view  = 'details.php';     
				$title = "Details for: $model[EmailType] ";           
                break;
                
        case 'new':
                $model =  EmailTypes::Blank();
                $view  = 'edit.php';    
				$title = "Create new  EmailType";             
                break;
        
        case 'save':
				$errors =  EmailTypes::Validate($_REQUEST);
				if(!$errors)
				{
					$errors =  EmailTypes::Save($_REQUEST);
				}
               
				if(!$errors)
				{
						header("Location: ?");   
						die(); 
				}
				$model = $_REQUEST;
				$view = 'edit.php';
				$title = "Edit: $model[EmailType]";           
				
                break;
                
        case 'edit':
                $model =  EmailTypes::Get($_REQUEST['id']);
                $view  = 'edit.php'; 
				$title = "Edit: $model[EmailType] ";                  
                break;
                
        case 'delete':
				
				if(isset($_POST['id'])){
                        $errors =  EmailTypes::Delete($_REQUEST['id']);                        
                        if(!$errors){
                                header("Location: ?");
                                die();
                        }                                                        
                }
                $model =   EmailTypes::Get($_REQUEST['id']);
                $view         = 'delete.php';                                        
                $title        = "Edit: $model[EmailType] " ;        
                break;
        
        default:
                $model =   EmailTypes::Get();
                $view         = 'lists.php';
                $title        = 'EmailType';                
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


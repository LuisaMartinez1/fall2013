<?php
include_once '../../inc/_global.php';
@$action = $_REQUEST['action'];
@$format = $_REQUEST['format'];


switch ($action) {
        case 'details':
                $model = Emails::Get($_REQUEST['id']);
                $view  = 'details.php';  
				$title = "Details for: $model[Email]";                    
                break;
                 
        case 'new':
                $model = Emails::Blank();
                $view  = 'edit.php';  
				$title = "Create New User";                 
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
				$title = "Edit: $model[Email] ";       
                break;
                
        case 'edit':
                $model = Emails::Get($_REQUEST['id']);
                $view  = 'edit.php';  
				$title = "Edit: $model[Email] ";        
				             
                break;
                
        case 'delete':
				
				if(isset($_POST['id'])){
                        $errors = Emails::Delete($_REQUEST['id']);                        
                        if(!$errors){
                                header("Location: ?");
                                die();
                        }                                                        
                }
                $model = Emails::Get($_REQUEST['id']);
                $view         = 'delete.php';                                        
                $title        = "Edit: $model[Email]"        ;        
        		break;
        default:
                $model = Emails::Get();
                $view  = 'lists.php';      
				$title = 'Emails';          
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


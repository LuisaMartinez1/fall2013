<?php
include_once '../../inc/_global.php';

@$action = $_REQUEST['action'];
@$format = $_REQUEST['format'];


switch ($action) {
        case 'details':
                $model = UsersFeedBack::Get($_REQUEST['id']);
                $view  = 'details.php';     
				$title = "Details for: $model[Users_id]";           
                break;
                
        case 'new':
                $model = UsersFeedBack::Blank();
                $view  = 'edit.php';    
				$title = "Create New User";             
                break;
        
        case 'save':
				$errors = UsersFeedBack::Validate($_REQUEST);
				if(!$errors)
				{
					$errors = UsersFeedBack::Save($_REQUEST);
				}
               
				if(!$errors)
				{
						header("Location: ?status=Saved&id=$_REQUEST[id]");   
						die(); 
				}
				$model = $_REQUEST;
				$view = 'edit.php';
				$title = "Edit: $model[Users_id] ";           
				
                break;
                
        case 'edit':
                $model = UsersFeedBack::Get($_REQUEST['id']);
                $view  = 'edit.php'; 
				$title = "Edit: $model[Users_id] ";                  
                break;
                
        case 'delete':
				
				if(isset($_POST['id'])){
                        $errors = UsersFeedBack::Delete($_REQUEST['id']);                        
                        if(!$errors){
                                header("Location: ?");
                                die();
                        }                                                        
                }
                $model = UsersFeedBack::Get($_REQUEST['id']);
                $view         = 'delete.php';                                        
                $title        = "Edit: $model[Users_id]"        ;        
                break;
        
        default:
                $model = UsersFeedBack::Get();
                $view         = 'lists.php';
                $title        = 'Users';                
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


<?php
include_once '../../inc/_global.php';

@$action = $_REQUEST['action'];
@$format = $_REQUEST['format'];


switch ($action) {
        case 'details':
                $model = Inventory::Get($_REQUEST['id']);
                $view  = 'details.php';     
				$title = "Details for: $model[Quantaty] ";           
                break;
                
        case 'new':
                $model =  Inventory::Blank();
                $view  = 'edit.php';    
				$title = "Create new  Quantaty";             
                break;
        
        case 'save':
				$errors =  Inventory::Validate($_REQUEST);
				if(!$errors)
				{
					$errors =  Inventory::Save($_REQUEST);
				}
               
				if(!$errors)
				{
						header("Location: ?");   
						die(); 
				}
				$model = $_REQUEST;
				$view = 'edit.php';
				$title = "Edit: $model[Quantaty]";           
				
                break;
                
        case 'edit':
                $model = Inventory::Get($_REQUEST['id']);
                $view  = 'edit.php'; 
				$title = "Edit: $model[Quantaty] ";                  
                break;
                
        case 'delete':
				
				if(isset($_POST['id'])){
                        $errors =  Inventory::Delete($_REQUEST['id']);                        
                        if(!$errors){
                                header("Location: ?");
                                die();
                        }                                                        
                }
                $model =   Inventory::Get($_REQUEST['id']);
                $view         = 'delete.php';                                        
                $title        = "Edit: $model[Quantaty] " ;        
                break;
        
        default:
                $model =   Inventory::Get();
                $view         = 'lists.php';
                $title        = 'Quantaty';                
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






<?php
include_once '../../inc/_global.php';

@$action = $_REQUEST['action'];
@$format = $_REQUEST['format'];


switch ($action) {
        case 'details':
                $model =  ProductKeyWords::Get($_REQUEST['id']);
                $view  = 'details.php';     
				$title = "Details for: $model[Name] ";           
                break;
                
        case 'new':
                $model =  ProductKeyWords::Blank();
                $view  = 'edit.php';    
				$title = "Create new Product Keyword";             
                break;
        
        case 'save':
				$errors =  ProductKeyWords::Validate($_REQUEST);
				if(!$errors)
				{
					$errors =  ProductKeyWords::Save($_REQUEST);
				}
               
				if(!$errors)
				{
						header("Location: ?");   
						die(); 
				}
				$model = $_REQUEST;
				$view = 'edit.php';
				$title = "Edit: $model[Name]";           
				
                break;
                
        case 'edit':
                $model =  ProductKeyWords::Get($_REQUEST['id']);
                $view  = 'edit.php'; 
				$title = "Edit: $model[Name] ";                  
                break;
                
        case 'delete':
				
				if(isset($_POST['id'])){
                        $errors =  ProductKeyWords::Delete($_REQUEST['id']);                        
                        if(!$errors){
                                header("Location: ?");
                                die();
                        }                                                        
                }
                $model =  ProductKeyWords::Get($_REQUEST['id']);
                $view         = 'delete.php';                                        
                $title        = "Edit: $model[Name] " ;        
                break;
        
        default:
                $model =  ProductKeyWords::Get();
                $view         = 'lists.php';
                $title        = 'Product Keywords';                
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




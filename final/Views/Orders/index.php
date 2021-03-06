<?php
include_once '../../inc/_global.php';
Auth::Secure();
@$action = $_REQUEST['action'];
@$format = $_REQUEST['format'];


switch ($action) {
        case 'details':
                $model = Orders::Get($_REQUEST['id']);
                $view  = 'details.php';     
				$title = "Details for: $model[PurchaseNumber] ";           
                break;
                
        case 'new':
                $model = Orders::Blank();
                $view  = 'edit.php';    
				$title = "Create New order";             
                break;
        
        case 'save':
				$errors = Orders::Validate($_REQUEST);
				if(!$errors)
				{
					$errors = Orders::Save($_REQUEST);
				}
               
				if(!$errors)
				{
						header("Location: ?status=Saved&id=$_REQUEST[id]");   
						die(); 
				}
				$model = $_REQUEST;
				$view = 'edit.php';
				$title = "Edit: $model[PurchaseNumber]";           
				
                break;
                
        case 'edit':
                $model = Orders::Get($_REQUEST['id']);
                $view  = 'edit.php'; 
				$title = "Edit: $model[PurchaseNumber]";                  
                break;
                
        case 'delete':
				
				if(isset($_POST['id'])){
                        $errors = Orders::Delete($_REQUEST['id']);                        
                        if(!$errors){
                                header("Location: ?");
                                die();
                        }                                                        
                }
                $model = Orders::Get($_REQUEST['id']);
                $view         = 'delete.php';                                        
                $title        = "Edit: $model[PurchaseNumber]"        ;        
                break;
        
        default:
                $model = Orders::Get();
                $view         = 'lists.php';
                $title        = 'Orders';                
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





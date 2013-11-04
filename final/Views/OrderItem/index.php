<?php
include_once '../../inc/_global.php';

@$action = $_REQUEST['action'];
@$format = $_REQUEST['format'];


switch ($action) {
        case 'details':
                $model =  OrderItem::Get($_REQUEST['id']);
                $view  = 'details.php';     
				$title = "Details for: $model[Items_id] ";           
                break;
                
        case 'new':
                $model =  OrderItem::Blank();
                $view  = 'edit.php';    
				$title = " New Ordered Item";             
                break;
        
        case 'save':
				$errors =  OrderItem::Validate($_REQUEST);
				if(!$errors)
				{
					$errors =  OrderItem::Save($_REQUEST);
				}
               
				if(!$errors)
				{
						header("Location: ?");   
						die(); 
				}
				$model = $_REQUEST;
				$view = 'edit.php';
				$title = "Edit: $model[Items_id] ";           
				
                break;
                
        case 'edit':
                $model = OrderItem::Get($_REQUEST['id']);
                $view  = 'edit.php'; 
				$title = "Edit: $model[Items_id] ";                  
                break;
                
        case 'delete':
				
				if(isset($_POST['id'])){
                        $errors =  OrderItem::Delete($_REQUEST['id']);                        
                        if(!$errors){
                                header("Location: ?");
                                die();
                        }                                                        
                }
                $model =  OrderItem::Get($_REQUEST['id']);
                $view         = 'delete.php';                                        
                $title        = "Edit: $model[Items_id] "        ;        
                break;
        
        default:
                $model = OrderItem::Get();
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





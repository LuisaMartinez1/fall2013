<?php
include_once '../../inc/_global.php';
Auth::HasPermission();
@$action = $_REQUEST['action'];
@$format = $_REQUEST['format'];


switch ($action) {
        case 'details':
                $model = Shipments::Get($_REQUEST['id']);
                $view  = 'details.php';     
				$title = "Details for: $model[ShipmentNumber]";           
                break;
                
        case 'new':
                $model = Shipments::Blank();
                $view  = 'edit.php';    
				$title = "add New Shipment";             
                break;
        
        case 'save':
				$errors = Shipments::Validate($_REQUEST);
				if(!$errors)
				{
					$errors = Shipments::Save($_REQUEST);
				}
               
				if(!$errors)
				{
						header("Location: ?");   
						die(); 
				}
				$model = $_REQUEST;
				$view = 'edit.php';
				$title = "Edit: $model[ShipmentNumber] ";           
				
                break;
                
        case 'edit':
                $model = Shipments::Get($_REQUEST['id']);
                $view  = 'edit.php'; 
				$title = "Edit: $model[ShipmentNumber]";                  
                break;
                
        case 'delete':
				
				if(isset($_POST['id'])){
                        $errors = Shipments::Delete($_REQUEST['id']);                        
                        if(!$errors){
                                header("Location: ?");
                                die();
                        }                                                        
                }
                $model = Shipments::Get($_REQUEST['id']);
                $view         = 'delete.php';                                        
                $title        = "Edit: $model[ShipmentNumber] "        ;        
                break;
        
        default:
                $model = Shipments::Get();
                $view         = 'lists.php';
                $title        = 'Shipments';                
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






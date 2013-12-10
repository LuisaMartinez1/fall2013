<?php
include_once '../../inc/_global.php';
Auth::HasPermission();
@$action = $_REQUEST['action'];
@$format = $_REQUEST['format'];


switch ($action) {
        case 'details':
                $model = CreditCard::Get($_REQUEST['id']);
                $view  = 'details.php';     
				$title = "Details for: $model[Method] $model[CreditCardNumber]";           
                break;
                
        case 'new':
                $model = CreditCard::Blank();
                $view  = 'edit.php';    
				$title = "Create Payment Method";             
                break;
        
        case 'save':
				$errors = CreditCard::Validate($_REQUEST);
				if(!$errors)
				{
					$errors = CreditCard::Save($_REQUEST);
				}
               
				if(!$errors)
				{
						header("Location: ?");   
						die(); 
				}
				$model = $_REQUEST;
				$view = 'edit.php';
				$title = "Edit: $model[Method] $model[CreditCardNumber]";           
				
                break;
                
        case 'edit':
                $model = CreditCard::Get($_REQUEST['id']);
                $view  = 'edit.php'; 
				$title = "Edit: $model[Method] $model[CreditCardNumber]";                  
                break;
                
        case 'delete':
				
				if(isset($_POST['id'])){
                        $errors = CreditCard::Delete($_REQUEST['id']);                        
                        if(!$errors){
                                header("Location: ?");
                                die();
                        }                                                        
                }
                $model = CreditCard::Get($_REQUEST['id']);
                $view         = 'delete.php';                                        
                $title        = "Edit: $model[Method] $model[CreditCardNumber]"        ;        
                break;
        
        default:
                $model = CreditCard::Get();
                $view         = 'lists.php';
                $title        = 'Payment';                
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





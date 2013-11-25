<?php
include_once '../../inc/_global.php';
@$action = $_REQUEST['action'];
@$format = $_REQUEST['format'];

switch($action) {
        case 'details':
                $model = Items::Get($_REQUEST['id']);
                $view  = 'details.php';     
				$title = "$model[ItemName] ";           
                break;
		case 'category':
				$model = Items::GetCategory($_REQUEST['id']);
				$view  = 'list.php';
				$title = "Category";
				break;
		case 'save':
				$errors = Users::Validate($_REQUEST);
				if(!$errors)
				{
					$errors = Users::Save($_REQUEST);
				}
               
				if(!$errors)
				{
						
							header("Location: ?status=Saved&id=$_REQUEST[id]");   
							die();
							
						  
				}
					$model = $_REQUEST;
					$view = 'register.php';
					$title ="Save";         
				
				break;
		 case 'saveaddress':
				$errors = Addresses::Validate($_REQUEST);
				if(!$errors)
				{
					$errors = Addresses::Save($_REQUEST);
				}
               
				if(!$errors)
				{
						if($format == 'plain')
						{
							$view = 'item.php';
							$rs   =  Addresses::Get($_REQUEST['id']);
						}else
						{
							header("Location: ?action=register&id=$_REQUEST[id]");   
							die();
						}	
						 
				}else
				{
					$model = $_REQUEST;
					$view = 'edit.php';
					$title = "Edit: $model[Street]";           
				}
                break;
                
		 case 'savepayment':
			 	$errors = CreditCard::Validate($_REQUEST);
				if(!$errors)
				{
					$errors = CreditCard::Save($_REQUEST);
				}
               
				if(!$errors)
				{
						header("Location: ?action=register&id=$_REQUEST[id]");   
						die(); 
				}
				$model = $_REQUEST;
				$view = 'edit.php';
				$title = "Edit: $model[Method] $model[CreditCardNumber]";           
				
                break;
                
				
		  case 'saveorder':
				$errors = Orders::Validate($_REQUEST);
				if(!$errors)
				{
					$errors = Orders::Save($_REQUEST);
				}
               
				if(!$errors)
				{
						header("Location: ?action=complete&id=$_REQUEST[id]");   
						die(); 
				}
				$model = $_REQUEST;
				$view = 'orders.php';
				$title = "Edit: $model[PurchaseNumber]";           
				
                break;
		case 'savecomplete':
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
				$view = 'receipt.php';
				$title = "Finish ";           
				
                break;
                
		case 'complete':
				$model = Items::BlankComplete();
				$view  = 'complete.php';
				$title = "Complete";
				break;
		case 'register':
				$model = Items::BlankUser();
				$view  = 'register.php';
				$title = "Register";
				break;
		case 'payment':
				$model = Items::BlankPayment();
				$view  = 'payment.php';
				$title = "Payment";
				break;
		case 'address':
				$model = Items::BlankAddress();
				$view  = 'address.php';
				$title = "Address";
				break;
		
		case 'verify':			
				$model = Items::Get($_REQUEST['id']);
				$view  = 'verify.php';
				$title = "$model[ItemName]"; 
				break; 
		case 'order':			
				$model = Items::BlankOrder();
				$view  = 'orders.php';
				$title = "Order"; 
				break; 
		default:  
				 $model         = Items::Get();
				 $view          = 'list.php';
				 break;
				 
				 
				 
}
switch ($format){
	case 'dialog':
		include '../Shared/_DialogLayout.php';
		break;
	
	default:
		include '../Shared/_Catalog.php';
		break;
}


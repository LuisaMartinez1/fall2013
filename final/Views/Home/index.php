<?php
include_once '../../inc/_global.php';


@$action = $_REQUEST['action'];
@$format = $_REQUEST['format'];
$errors = null;
$user=Auth::GetUser();
@$PurchaseTotal['PurchaseTotal'];


switch($action) {
        case 'categories':
                $model = Categories::Get();
                break;                
        case 'products':
                $model  = Items:: GetByCategory($_REQUEST['Categories_id']);
                break;   
		case 'addToCart':
				if(!isset($_SESSION['cart'])) $_SESSION['cart'] = array();
				$cart = $_SESSION['cart'];
				$cart[] = $_REQUEST['id'];
				$_SESSION['cart']= $cart;
				
				header('Location: ?'); die();
				break;   
		case 'verify':
				
				$view  = 'verify.php';
				$title = "Verify";
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
		case 'login':
				$model = array('LastName' => null,'password'=>null);
                $view  = 'login.php';     
				$title = "Login";           
                break;
		case 'submitlogin':
				Auth::LogIn($_REQUEST['LastName'], $_REQUEST['password']);
				$view = 'orders.php';
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
		case 'saveorder':
				$errors = Orders::Validate($_REQUEST);
				if(!$errors)
				{
					$errors = Orders::Save($_REQUEST);
				}
               
				if(!$errors)
				{
						
						header("Location: ?action=complete");   
						die(); 
				}
				$model = $_REQUEST;
				$view = 'orders.php';
				$title = "saveOrder";           
				
                break;
		case 'order':			
				$model = Items::BlankOrder();
				
				$view  = 'orders.php';
				$title = "Order"; 
				break; 
		case 'complete':
				$model = Items::BlankComplete();
				$Number = Orders::GetOrder($user['id']);
				$view  = 'complete.php';
				$title = "Complete";
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
		case 'savecomplete':
				$errors =  OrderItem::Validate($_REQUEST);
				if(!$errors)
				{
					$errors = OrderItem::Save($_REQUEST);
				}
               
				if(!$errors)
				{
						$view = 'receipt.php';
				}
				$model = $_REQUEST;
				$view = 'receipt.php';
				$title = "Finish ";           
				
                break;
                       
		case 'logout':
			  session_destroy();
			  session_start();
			  $view  = 'home.php';
			  break;		
        default:
                $view  = 'home.php';
                $title = 'Home';                
                break;
}

switch ($format) {
        case 'dialog':
                include '../Shared/_DialogLayout.php';                                
                break;
                
        case 'plain':
                include $view;
                break;
                
        case 'json':
                echo json_encode(array('model'=> $model, 'errors'=> $errors));
                break;
        
        default:
                include '../Shared/_PublicLayout.php';                
                break;
}




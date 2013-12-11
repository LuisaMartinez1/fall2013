<?php
include_once '../../inc/_global.php';

@$action = $_REQUEST['action'];
@$format = $_REQUEST['format'];
$errors = null;


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




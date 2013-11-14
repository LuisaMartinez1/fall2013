<?php
include_once '../../inc/_global.php';

@$action = $_REQUEST['action'];
@$format = $_REQUEST['format'];


switch ($action) {
        case 'details':
                $model = WishList::Get($_REQUEST['id']);
                $view  = 'details.php';     
				$title = "Details for: $model[Fall2013_Items_id]";           
                break;
                
        case 'new':
                $model = WishList::Blank();
                $view  = 'edit.php';    
				$title = "Creat New Wish List";             
                break;
        
        case 'save':
				$errors = WishList::Validate($_REQUEST);
				if(!$errors)
				{
					$errors = WishList::Save($_REQUEST);
				}
               
				if(!$errors)
				{
						header("Location: ?status=Saved&id=$_REQUEST[id]");   
						die();  
				}
				$model = $_REQUEST;
				$view = 'edit.php';
				$title = "Edit: $model[Fall2013_Items_id]";           
				
                break;
                
        case 'edit':
                $model = WishList::Get($_REQUEST['id']);
                $view  = 'edit.php'; 
				$title = "Edit: $model[Fall2013_Items_id]";                  
                break;
                
        case 'delete':
				
				if(isset($_POST['id'])){
                        $errors = WishList::Delete($_REQUEST['id']);                        
                        if(!$errors){
                                header("Location: ?");
                                die();
                        }                                                        
                }
                $model = WishList::Get($_REQUEST['id']);
                $view         = 'delete.php';                                        
                $title        = "Edit: $model[Fall2013_Items_id]"        ;        
                break;
        
        default:
                $model = WishList::Get();
                $view         = 'lists.php';
                $title        = 'Wish List';                
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



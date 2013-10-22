<?php
include_once '../../inc/_global.php';

@$action = $_REQUEST['action'];

switch ($action) {
        case 'details':
                $model = Users::Get($_REQUEST['id']);
                $view  = 'details.php';                
                break;
                
        case 'new':
                $view  = 'new.php';                
                break;
        
        case 'save':
                Users::Save($_REQUEST);
				if($errors){
					$models = $_REQUEST;
					$view = 'new.php';
				}else{
						header("Location: ?");   
						die(); 
				}
				   
                break;
                
        case 'edit':
                $model = Users::Get($_REQUEST['id']);
                $view  = 'details.php';                
                break;
                
        case 'delete':
                $model = Users::Get($_REQUEST['id']);
                $view  = 'details.php';                
                break;
        
        default:
                $model = Users::Get();
                $view  = 'lists.php';                
                break;
}


include '../Shared/_Layout.php';
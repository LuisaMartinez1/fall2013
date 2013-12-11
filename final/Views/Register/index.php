<?php
include_once '../../inc/_global.php';




@$action = $_REQUEST['action'];
@$format = $_REQUEST['format'];
$errors = null ;


switch ($action) {         
        case 'new':
                $model = Users::Blank();
                $view  = 'edit.php';    
				$title = "Create New User";             
                break;
        case 'save':
				$errors = Users::Validate($_REQUEST);
				if(!$errors)
				{
					$errors = Users::Save($_REQUEST);
				}
               
				if(!$errors)
				{
						if($format == 'plain' || $format == 'json')
						{
							
							$rs = $model  = Users::Get($_REQUEST['id']);
						}else
						{
							header("Location: ?status=Saved&id=$_REQUEST[id]");   
							die();
						}	
						  
				}else
				{
					$model = $_REQUEST;
					$view = 'edit.php';
					$title = "Edit: $model[FirstName] $model[LastName]";         
				}  
				break;
             
}

switch ($format){
	case 'dialog':
		include '../Shared/_DialogLayout.php';
		break;
	case 'plain':
		include $view;
		break;
	case 'json':
		echo json_encode(array('model' => $model, 'errors' =>$errors));
		break;
	default:
		include '../Shared/_Layout.php';
		break;
}



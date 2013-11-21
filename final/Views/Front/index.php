<?php
include_once '../../inc/_global.php';
@$action = $_REQUEST['action'];
@$format = $_REQUEST['format'];

switch ($action) {
        case 'details':
                $model = Items::Get($_REQUEST['id']);
                $view  = 'details.php';     
				$title = "$model[ItemName] ";           
                break;
		default:  
			 $model         = Items::Get();
			 $view        = 'list.php';
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


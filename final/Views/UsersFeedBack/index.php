<?php
include_once '../../inc/_global.php';

$model = UsersFeedBack::Get();
$view = 'lists.php';
include '../Shared/_Layout.php';

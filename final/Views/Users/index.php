<?php
include_once '../../inc/_global.php';

$model = Users::Get();
$view = 'lists.php';
include '../Shared/_Layout.php';

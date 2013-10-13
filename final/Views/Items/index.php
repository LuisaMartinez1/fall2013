<?php
include_once '../../inc/_global.php';

$model = Items::Get();
$view = 'lists.php';
include '../Shared/_Layout.php';

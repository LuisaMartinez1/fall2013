<?php
include_once '../../inc/_global.php';

$model = Suppliers::Get();
$view = 'lists.php';
include '../Shared/_Layout.php';

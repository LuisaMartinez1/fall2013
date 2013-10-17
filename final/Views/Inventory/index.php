<?php
include_once '../../inc/_global.php';

$model = Inventory::Get();
$view = 'lists.php';
include '../Shared/_Layout.php';

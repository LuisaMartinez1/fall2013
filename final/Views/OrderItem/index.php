<?php
include_once '../../inc/_global.php';

$model = OrderItem::Get();
$view = 'lists.php';
include '../Shared/_Layout.php';

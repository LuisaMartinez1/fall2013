<?php
include_once '../../inc/_global.php';

$model = Shipments::Get();
$view = 'lists.php';
include '../Shared/_Layout.php';

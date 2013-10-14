<?php
include_once '../../inc/_global.php';

$model = Orders::Get();
$view = 'lists.php';
include '../Shared/_Layout.php';

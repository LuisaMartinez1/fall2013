<?php
include_once '../../inc/_global.php';

$model = Addresses::Get();
$view = 'lists.php';
include '../Shared/_Layout.php';

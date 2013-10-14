<?php
include_once '../../inc/_global.php';

$model = AddressTypes::Get();
$view = 'lists.php';
include '../Shared/_Layout.php';

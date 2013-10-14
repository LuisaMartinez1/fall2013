<?php
include_once '../../inc/_global.php';

$model = PhoneTypes::Get();
$view = 'lists.php';
include '../Shared/_Layout.php';

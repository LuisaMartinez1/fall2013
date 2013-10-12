<?php
include_once '../../inc/_global.php';

$model = PhoneNumbers::Get();
$view = 'lists.php';
include '../Shared/_Layout.php';

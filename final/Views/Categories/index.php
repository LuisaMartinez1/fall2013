<?php
include_once '../../inc/_global.php';

$model = Categories::Get();
$view = 'lists.php';
include '../Shared/_Layout.php';

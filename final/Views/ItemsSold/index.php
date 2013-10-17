<?php
include_once '../../inc/_global.php';

$model = ItemsSold::Get();
$view = 'lists.php';
include '../Shared/_Layout.php';

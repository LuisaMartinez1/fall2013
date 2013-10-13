<?php
include_once '../../inc/_global.php';

$model = WishList::Get();
$view = 'lists.php';
include '../Shared/_Layout.php';

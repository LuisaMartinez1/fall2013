<?php
include_once '../../inc/_global.php';

$model = CreditCard::Get();
$view = 'lists.php';
include '../Shared/_Layout.php';
